<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\Rules\MatchOldPassword;

use Illuminate\Support\Facades\Hash;

use App\User;



class ChangePasswordController extends Controller

{

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function __construct()

    {

        //$this->middleware('auth');

    }


    /**
     * Show the application dashboard.
     *
     * @param $user
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index($user)

    {

        return view(['changePassword', 'user' => $user]);

    }

    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function store(Request $request)

    {

        $request->validate([

           // 'current_password' => ['required', new MatchOldPassword],

            'new_password' => ['required'],

            'new_confirm_password' => ['same:new_password'],

        ]);



        User::find($request->user)->update(['password'=> Hash::make($request->new_password)]);


        //return ['message'=>'Password change successfully!'];
        dd('Password change successfully.');

    }
    function changePassword(Request $request){


        if($request->oldpassword == $request->user()->password) {


            $this->validate($request, [
                'password' => 'required|min:8|confirmed',
                //'password' => 'min:6|confirmed',

            ]);

            $request->user()->password = bcrypt($request->password);

        }else{

        }

    }

}
