<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Models\User_activation as Activation;
use App\Mail\Activate;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    protected $activation;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Activation $activation)
    {
        $this->middleware('guest');
        $this->activation = $activation;
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
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
     * Register new user
     *
     * @param  array $data
     * @return User
     */
    public function register(Request $request)
    {
        $validator = $this->validator($request->all());
        if ($validator->passes()) {
            $user = $this->create($request->all());
            $user['link'] = str_random(30);
            $this->activation->create(['id_user' => $user->id, 'token' => $user->link]);
            Mail::to($user->email)->send(new Activate($user));
            return redirect()->to('login')
                ->with('success', "We sent activation code. Please check your mail.");
        }
        return back()->with('errors', $validator->errors());
    }
}
