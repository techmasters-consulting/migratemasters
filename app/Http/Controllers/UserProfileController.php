<?php

namespace App\Http\Controllers;
use CountryState;
use App\UserProfile;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class UserProfileController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware(['auth','verified'] );
//$this->middleware('verified');
    }
    public function getAuthUser ()
    {
        return Auth::user();
    }

    public function getUserProfile()
    {
        $user = $this->getAuthUser();

        return $user->userProfile;
    }
    public function getCountries()
    {
        $countries = DB::table('countries')->get();

        return $countries;
    }

    public function checkUserExisted()
    {
        $checkUserExisted = DB::table('user_profiles')->where('user_id', auth()->id())->exists();
//dd($checkUserExisted);

        return response()->json($checkUserExisted);
        //return $checkUserExisted;
    }
    public function updateAuthUser (Request $request)
    {

        $user = Auth::user();


        if (isset($request['avatar'])) {
            $user->addMediaFromRequest('avatar')->toMediaCollection('avatars');
        }
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->country = $request->country;
        $user->state = $request->state;
        $user->gender = $request->gender;
        $user->email = $request->email;

        $user->save();

        $request->session()->flash('status', 'You have updated your account!');

        return view('my-account', array('user' => Auth::user()));

    }

    public function my_profile()
    {
        return view('my-profile');
    }
    public function my_account()
    {
        return view('my-account');
    }



    /*
    |-------------------------------------------------------------------------------
    | Updates a User's Profile
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/user
    | Method:         PUT
    | Description:    Updates the authenticated user's profile
    */
    /**
     * Update the user's profile details.
     *
     * @param Request $request
     * @return void
     * @throws \Illuminate\Validation\ValidationException
     */
    public function userProfileUpdate(Request $request)
    {

        $this->validate($request, [

            'fname' => 'required|string|min:1',
            'lname' => 'required|string|min:1',
            'mname' => 'required|string|min:1',
            'oname' => 'required|string|min:1',
            'gender' => 'required',
            'age' => 'required|integer|min:1',
            'dob' => 'required',
            'cob' => 'required|string|min:1',
            'country' => 'required|string|min:1',
            'city' => 'required|string|min:1',
            'state' => 'required|string|min:1',
            'haddress' => 'required',
            'nationality' => 'required|string|min:1',
//'other citizenship' => 'required|string|min:1',
            'expiry' => 'required',
            'pdivorced' => 'required|string|min:1',
            'mstatus' => 'required',
            'nlanguage' => 'required|string|min:1',
            'language' => 'required|string|min:1',
// 'email' => 'required|email|unique:users,email,' . Auth::id()
        ]);

        $userprofile = UserProfile::where('user_id', Auth()->id())->first();

        if(!$userprofile){
            $userprofile = new UserProfile();
            $userprofile->user_id = Auth()->id();
        }

            $filename =time().'.' .explode('/', mime_content_type($request->filePhoto))[1];

            Image::make($request->filePhoto)->save(public_path('images/').$filename);

      //      $request->merge(['filePhoto' => $filename]);
      $userprofile->filePhoto=$filename;


        $userprofile->user_id = Auth::id();
        $userprofile->fname = $request->fname;
        $userprofile->lname = $request->lname;
        $userprofile->mname = $request->mname;
        $userprofile->oname = $request->oname;
        $userprofile->country = $request->country;
        $userprofile->city = $request->city;
        $userprofile->state = $request->state;
        $userprofile->haddress = $request->haddress;
        $userprofile->gender = $request->gender;
        $userprofile->age = $request->age;
        $userprofile->dob = $request->dob;
        $userprofile->cob = $request->cob;
        $userprofile->nationality = $request->nationality;
        $userprofile->citizenship = $request->citizenship;
        $userprofile->expiry = $request->expiry;
        $userprofile->pdivorced = $request->pdivorced;
        $userprofile->mstatus = $request->mstatus;
        $userprofile->nlanguage = $request->nlanguage;
        $userprofile->language = $request->language;
        $userprofile->save();


        return ['message'=>'Profile Updated!'];
    }

    public function userProfileGet(){
//$userProfile = $this->getUserProfile();
        $user = $this->getAuthUser();
        $userProfile =$user->userProfile;


        return response()->json($userProfile);
    }
    public function destroy(){

        $user = $this->getAuthUser ();

        Auth::logout();

        if ($user->delete()) {

            return Redirect::route('/')->with('global', 'Your account has been deleted!');
        }
    }

}

