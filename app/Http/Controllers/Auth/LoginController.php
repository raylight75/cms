<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;
use App\Models\User_activation as Activation;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers {
        logout as performLogout;
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/cms';

    protected $activation;

    protected $user;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Activation $activation, User $user )
    {
        $this->middleware('guest', ['except' => 'logout']);
        $this->activation = $activation;
        $this->user = $user;
    }

    /**
     * Override logout
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        $this->performLogout($request);
        return redirect('/cms');
    }

    public function login(Guard $auth, Request $request)
    {
        $this->validateLogin($request);
        if ($this->attemptLogin($request)) {
            if ($auth->user()->is_activated == '0') {
                $auth->logout();
                return back()->with('warning', "First please activate your account.");
            }
            //Demo user role
            $role = $this->user->find(auth()->id());
            $role->role()->sync(array(auth()->id() => 2)); //2 for Demo users
            //End add Demo User
            return redirect()->to('/welcome');
        } else {
            return back()->with('error', 'Your username or password are wrong.');
        }
    }

    /**
     * Check for user Activation Code
     *
     * @param  array $data
     * @return User
     */
    public function userActivation($token)
    {
        $check = $this->activation->where('token', $token)->first();
        if (!is_null($check)) {
            $user = $this->user->find($check->id_user);
            if ($user->is_activated == 1) {
                return redirect()->to('login')
                    ->with('success', "User are already actived.");
            }
            $user->update(['is_activated' => 1]);
            $this->activation->where('token', $token)->delete();
            return redirect()->to('login')
                ->with('success', "User activated successfully.");
        }
        return redirect()->to('login')
            ->with('warning', "Your token is invalid.");
    }
}
