<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'church_name' => ['required', 'string', 'min:8']
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
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        $user->info()->create([
            'church_name' => $data['church_name']
        ]);
        $user->hero()->create();
        $user->mission()->create();
        $user->pastor()->create();
        $user->testimonials()->create([
            'image' => 'https://randomuser.me/api/portraits/women/53.jpg',
            'message' => "I feel like I am with family that I have known for years who love me no matter what. It is a wonderful, Bible based Church. We do not look to step on anyone's toes, but we do not stand by and do nothing when someone is headed down the wrong path.",
            'reference' => 'Susan Doe'
        ]);
        $user->testimonials()->create([
            'image' => 'https://randomuser.me/api/portraits/men/86.jpg',
            'message' => "I would tell people that I have felt more love by this church family and the preacher than anywhere I have ever attended.",
            'reference' => 'Frank User'
        ]);
        $user->visit()->create();
        return $user;
    }
}
