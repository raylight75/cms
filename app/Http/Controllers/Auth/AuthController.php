<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Models\User_activation as Activation;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;
use Mail, Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    protected $redirectPath = '/welcome';

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /*public function authenticated()
    {
        Cart::restore(auth()->id());
        return redirect($this->redirectPath());
    }*/

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return static
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param Guard $auth
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postLogin(Guard $auth, Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if ($auth->attempt(array('email' => $request->input('email'), 'password' => $request->input('password')))) {
            if ($auth->user()->is_activated == '0') {
                $auth->logout();
                return back()->with('warning', "First please activate your account.");
            }
            return redirect()->to('/welcome');
        } else {
            return back()->with('error', 'Your username or password are wrong.');
        }
    }

    /**
     * Register new user
     *
     * @param  array $data
     * @return User
     */
    public function postRegister(Request $request)
    {
        $validator = $this->validator($request->all());
        if ($validator->passes()) {
            $user = $this->create($request->all())->toArray();
            $user['link'] = str_random(30);
            Activation::create(['id_user' => $user['id'], 'token' => $user['link']]);
            Mail::send('emails.activation', $user, function ($message) use ($user) {
                $message->to($user['email']);
                $message->subject('Site - Activation Code');
            });
            return redirect()->to('auth/login')
                ->with('success', "We sent activation code. Please check your mail.");
        }
        return back()->with('errors', $validator->errors());
    }

    /**
     * Check for user Activation Code
     *
     * @param  array $data
     * @return User
     */
    public function userActivation($token)
    {
        $check = Activation::where('token', $token)->first();
        if (!is_null($check)) {
            $user = User::find($check->id_user);
            if ($user->is_activated == 1) {
                return redirect()->to('auth/login')
                    ->with('success', "User are already actived.");
            }
            $user->update(['is_activated' => 1]);
            Activation::where('token', $token)->delete();
            return redirect()->to('auth/login')
                ->with('success', "User activated successfully.");
        }
        return redirect()->to('auth/login')
            ->with('warning', "Your token is invalid.");
    }
}
