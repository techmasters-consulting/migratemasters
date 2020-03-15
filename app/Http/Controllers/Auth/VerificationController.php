<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Carbon\Carbon;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Auth\Passwords\PasswordBroker;
use Illuminate\Support\Str;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;
    use ResetsPasswords;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = '/firsttime';


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }

    /**
     * Mark the authenticated user's email address as verified.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
//    public function verify(Request $request)
//    {
//        if ($request->route('id') != $request->user()->getKey()) {
//            throw new AuthorizationException;
//        }
//
//        if ($request->user()->hasVerifiedEmail()) {
//            $request->session()->flash('status', 'You have successfully verified your account!');
//            //Flash::message('You have successfully verified your account.');
//            return redirect($this->redirectPath());
//        }
//
//        if ($request->user()->markEmailAsVerified()) {
//            $request->session()->flash('status', 'You have already successfully verified your account!');
//            event(new Verified($request->user()));
//        }
//
//        return redirect($this->redirectPath())->with('verified', true);
//
//        //flashmessage
//        // $request->session()->flash('status', 'You have successfully verified your account');
//        // Flash::message('You have successfully verified your account.');
//
//    }

//    public function verify(Request $request)
//    {
//        $user = User::find($request->id);
//
//        if ($request->route('id') != $user->getKey()) {
//            throw new AuthorizationException;
//        }
//
//        if ($user->markEmailAsVerified()) {
//            event(new Verified($user));
//        }
//
//        return redirect($this->redirectPath())->with('verified', true);
//    }
    public function verify(Request $request)
    {
        $user = User::find($request->id);


        if (! hash_equals((string) $request->route('id'), (string) $user->getKey())) {
            throw new AuthorizationException;
        }

        if (! hash_equals((string) $request->route('hash'), sha1($user->getEmailForVerification()))) {
            throw new AuthorizationException;
        }

        if ($user->hasVerifiedEmail()) {
            $request->session()->flash('status', 'You have already successfully verified your account!');
            return redirect($this->redirectPath());
        }

        if ($user->markEmailAsVerified()) {
            $request->session()->flash('status', 'You have  successfully verified your account!');
            event(new Verified($user));

        }
        //$to = $this->showResetForm($user->email);
       // dd($to);
        //return $this->showResetForm($user->email);
        //return redirect($this->redirectPath())->with('verified', true);
       // return Redirect::route('firstimelogin',  $user );
       // $token = $this->generateRandomString(64);



// insert a token record into the password reset table
        $token = app(PasswordBroker::class)->createToken($user);
        //when token is incorrect it works
//        DB::table('password_resets')->insert([
//            'email' => $user->email,
//            'token' => $token,
//            'created_at' => Carbon::now()
//        ]);
        return redirect::route('password.reset', array($token.'?email='.$user->email));


    }


    /**
     * Reset the given user's password.
     *
     * @param  \Illuminate\Contracts\Auth\CanResetPassword  $user
     * @param  string  $password
     * @return void
     */
    protected function resetPassword($user, $password)
    {
        $this->setUserPassword($user, $password);

        $user->setRememberToken(Str::random(60));

        $user->save();

        event(new PasswordReset($user));

        //$this->guard()->login($user);
    }


}
