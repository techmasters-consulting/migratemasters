<?php

namespace App\Http\Controllers;

use App\UserBackgroundInfo;
use Illuminate\Http\Request;

class UserBackgroundInfoController extends Controller
{
    //

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store (Request $request)
    {
        // if($request->dependant){

        $this->validate($request,[
                'familytuberculosis' => 'required',
                'mentaldisorder' => 'required',

                'beyondvalidity' => 'required',
                'refusedentry' => 'required',
                'previousapplication' => 'required',
                'policecertificate' => 'required',
                'criminaloffence' => 'required',
                'courtproceduresabroad' => 'required',
                'courtprocedureshome' => 'required',

            ]
        );

        $user_background_info = UserBackgroundInfo::where('user_id', Auth()->id())->first();

        if(!$user_background_info){
            $user_background_info = new UserBackgroundInfo();
            $user_background_info->user_id = Auth()->id();
        }

        $user_background_info->familytuberculosis = $request->familytuberculosis;
        $user_background_info->mentaldisorder = $request->mentaldisorder;
        $user_background_info->moreinfomedical = $request->moreinfomedical;
        $user_background_info->beyondvalidity = $request->beyondvalidity;
        $user_background_info->refusedentry = $request->refusedentry;
        $user_background_info->previousapplication = $request->previousapplication;
        $user_background_info->moreinfovisa = $request->moreinfovisa;
        $user_background_info->policecertificate = $request->policecertificate;
        $user_background_info->criminaloffence = $request->criminaloffence;
        $user_background_info->moreinfocriminal = $request->moreinfocriminal;
        $user_background_info->courtproceduresabroad = $request->courtproceduresabroad;
        $user_background_info->courtprocedureshome = $request->courtprocedureshome;
        $user_background_info->moreinfocourt = $request->moreinfocourt;
        $user_background_info->save();

        return response()->json('Your Background info has been saved!');
    }

    public function get_background_info()
    {

        $user_background_info = UserBackgroundInfo::where('user_id', Auth()->id())->get();


        return response()->json($user_background_info[0]);

    }

}
