<?php

namespace App\Http\Controllers\Auth;

use App\Seekers;
use App\User;
use App\Role;
use App\Rules\ValidName;
use App\Rules\ValidRole;
use App\Rules\ValidMobileNumber;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
    protected $redirectTo = '/register/step-2';

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
        $data['mobile'] = '91' . $data['mobile'];

        return Validator::make($data, [
            'name' => ['required', new ValidName, 'between:2,70'],
            'email' => 'required|string|email|max:255|unique:users',
            'mobile' => ['required', 'unique:users', new ValidMobileNumber],
            'password' => 'required|string|min:6|confirmed',
            'role' => ['required', new ValidRole],
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
            'name' => ucwords(
                strtolower(
                    // Replace multiple spaces with single space in name.
                    preg_replace('/\s+/', ' ', $data['name'])
                )
            ),
            'email' => $data['email'],
            'mobile' => '91' . $data['mobile'],
            'password' => Hash::make($data['password']),
        ]);

        $role = Role::where('name', $data['role'])->first();
        $user->attachRole($role);

        if ($role->name === "job-seeker") {
            $seeker = new Seekers;
            $seeker->user()->associate($user)->save();
        }

        return $user;
    }
}
