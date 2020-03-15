<?php

namespace App\Http\Controllers;

use App\UserWorkExperience;
use Illuminate\Http\Request;

class UserWorkExperienceController extends Controller
{
    //

    public function create (Request $request)
    {


            $this->validate($request,[
                'company' => 'required|string',
                'jobtitle' => 'required|string',
                'startdate' => 'required|date',
                'enddate' => 'required|date',

            ]);
            $work = new UserWorkExperience();
            $work->user_id = Auth()->id();
            $work->company = $request->company;
            $work->job_title = $request->jobtitle;
            $work->job_period_start 	 = $request->startdate;
            $work->job_period_end 	 = $request->enddate;

          $yes =  $work->save();

            if ($yes){
                return ['message'=>'Work abroad goals saved!'];
            }else{
                return ['message'=>'Work abroad goals not saved!'];
            }



    }

    public function getWorkExp()
    {
        $user_works = UserWorkExperience::where('user_id', Auth()->id())->get();

        return response()->json($user_works);

    }
    public function delete_work($id)
    {

        $user_dependents = UserWorkExperience::where('id', $id);

        $user_dependents->delete();

        return ['message' => 'Work Experience Deleted'];


    }
}
