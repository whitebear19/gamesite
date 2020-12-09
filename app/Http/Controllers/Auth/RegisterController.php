<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;
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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $mail = '';
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {    
        $user =  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'type' => $data['type'],
            'role' => '1',
            'password' => Hash::make($data['password']),
        ]);
        $this->mail = $data['email'];
        $enc_id = \Illuminate\Support\Facades\Crypt::encryptString($user->id);
        // return $user;  
<<<<<<< HEAD
        \Mail::to('bendan198242@gmail.com')->send(new \App\Mail\VerifyMail($enc_id));
=======
        \Mail::to($this->mail)->send(new \App\Mail\VerifyMail($enc_id));
>>>>>>> 256223c0051a5961e48d46e82defc5f2e2ffd60e
       
        dd("Email is Sent.");
    }
}
