<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Role;
use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
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
            'name' => ['required', 'string', 'max:255', 'min:3'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//            'phone' => 'required|string|',
            'visa_for' => 'required',
           // 'user_role' => ['required', 'string', 'max:10'],
          //  'password' => ['required', 'string', 'min:8', 'confirmed'],

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

        $password = $this->generateRandomString(10);
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            //'role' => $data['role'],
            'password' => Hash::make($password),
        ]);
       // $role = Role::where('name', '=', $data['user_role'])->first();
      //  $user->roles()->attach($role);
        return $user;
    }

//    protected function generateRandomString($length = 10) {
//        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
//        $charactersLength = strlen($characters);
//        $randomString = '';
//        for ($i = 0; $i < $length; $i++) {
//            $randomString .= $characters[rand(0, $charactersLength - 1)];
//        }
//        return $randomString;
//    }
    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {

        $this->validate($request,[
            'name' => ['required', 'string', 'max:255', 'min:3'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phoneNo' => 'required',
            'visa_for' => 'required',
        ]
    );

        $request->merge(['phone' => $request->phoneNo]);
        event(new Registered($user = $this->create($request->all())));

        //$this->guard()->login($user);

//        return $this->registered($request, $user)
//            ?: redirect($this->redirectPath());

        return $this->registered($request, $user)
            ?: response()->json("success");
    }

    protected function redirectTo()
    {
        //return "success";
//        if (auth()->user()->role_id == 1) {
//            return '/admin';
//        }
       return $this->output();
    }

    private function output()
    {
        return response()->json("successful");
    }
}
