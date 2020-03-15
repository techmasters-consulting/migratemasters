<?php

namespace App\Http\Controllers;

use App\UserEducationHistory;
use Illuminate\Http\Request;

class UserEducationHistoryController extends Controller
{
    //

    public function store (Request $request)
    {


            $this->validate($request,[
                'institution' => 'required|string',
                'discipline' => 'required',
                'qualification' => 'required',
                'ending_date' => 'required',
                'starting_date' => 'required',

            ]);
            $education = new UserEducationHistory();
            $education->user_id = Auth()->id();
            $education->institution = $request->institution;
            $education->discipline = $request->discipline;
            $education->qualification = $request->qualification;
            $education->ending_date = $request->ending_date;
            $education->starting_date = $request->starting_date;

            $education->save();

        return ['message'=>'Work abroad goals saved!'];
    }

    public function get_education()
    {

        $user_dependents = UserEducationHistory::where('user_id', Auth()->id())->get();


        return response()->json($user_dependents);

    }


    public function delete_education($id)
    {
        $user_education = UserEducationHistory::where('id', $id);
        $user_education->delete();

        return ['message' => 'Education Deleted'];


    }
}
