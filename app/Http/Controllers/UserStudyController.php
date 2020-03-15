<?php

namespace App\Http\Controllers;

use App\UserRelocateGoals;
use App\UserFinancialPlan;
use App\UserEducation;
use App\UserImportantFactors;
use App\UserWork;
use Illuminate\Http\Request;

class UserStudyController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware(['auth','verified'] );
        //$this->middleware('verified');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_study(Request $request){

if($request->gotoffer == 'yes'){
    $this->validate(request(),[
                'school' => 'required',
                'course' => 'required',

    ]);
}
        $this->validate(request(),[
            'gotoffer' => 'required',
            'language'=>'required',
        ]);

        $data = json_decode($request->getContent());

        $lang = implode(',', (array)$data->language);

        $undergraduate = implode(',', (array)$data->undergraduate);
        $postgraduate = implode(',', (array)$data->postgraduate);
        $userstudygoals = UserEducation::where('user_id', Auth()->id())->first();

        if(!$userstudygoals){
            $userstudygoals= new UserEducation();
        }

        $userstudygoals->user_id= Auth()->id();
        $userstudygoals->gotoffer= $data->gotoffer;
        $userstudygoals->school= $data->school;
        $userstudygoals->course= $data->course;
        $userstudygoals->startingdate= $data->startingdate;
        $userstudygoals->language= $lang;
        $userstudygoals->undergraduate= $undergraduate;
        $userstudygoals->postgraduate= $postgraduate;


        $userstudygoals->save();
        $request->session()->flash('status', 'You have updated your Study Info!');

        return ['message'=>'Study info saved!'];

    }


    public function get_study()
    {

        $user_study = UserEducation::where('user_id', Auth()->id())->first();
      explode(',', $user_study->language);

        return response()->json($user_study);

    }


    

}
