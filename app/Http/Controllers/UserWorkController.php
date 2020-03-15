<?php

namespace App\Http\Controllers;


use App\UserWork;
use Illuminate\Http\Request;

class UserWorkController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware(['auth','verified'] );
        //$this->middleware('verified');
    }
    public function getWork()
    {
        $query3 = UserWork::query();
        $factors3 = clone $query3;

        $factors3 = $factors3->get();
        $allfactors3 = $factors3->count();
        $work_goals = $query3->where('user_id', '=', auth()->id())->select('id',  'company', 'jobtitle', 'gotjob', 'startdate' )->get();




        $query6 = UserFinancialPlan::query();
        $factors6 = clone $query6;

        $factors6 = $factors6->get();
        $allfactors6 = $factors6->count();

        $financialPlan = $query6->where('user_id', '=', auth()->id())->select('id', 'financial_support', 'budget')->get();
        return view('my-interests', array('tasks'=>$tasks,  'study_goals'=>$study_goals, 'work_goals'=>$work_goals , 'study_goals'=>$study_goals, 'financialPlan'=>$financialPlan ));


//               $query2 = UserTestPlan::query();
//        $factors2 = clone $query2;
//
//        $factors2 = $factors2->get();
//        $allfactors2 = $factors2->count();
//
//        $test  = $query2->where('user_id', '=', auth()->id())->select('id', 'language', 'undergraduate', 'postgraduate')->get();
//
//
//        $query3 = UserEducationHistory::query();
//        $factors3 = clone $query3;
//
//        $factors3 = $factors3->get();
//        $allfactors3 = $factors3->count();
//
//        $edu  = $query3->where('user_id', '=', auth()->id())->select('id', 'institution', 'is_current', 'course', 'grade', 'location')->get();
//
//
//        $query4 = UserWorkHistory::query();
//        $factors4 = clone $query4;
//
//        $factors4 = $factors4->get();
//        $allfactors4 = $factors4->count();
//
//        $work  = $query4->where('user_id', '=', auth()->id())->select('id', 'company', 'is_current', 'job_title' , 'job_level', 'location')->get();
//
//        $query5 = UserStudyGoals::query();
//        $factors5 = clone $query5;
//
//        $factors5 = $factors5->get();
//        $allfactors5 = $factors5->count();
//
//        $goals = $query5->where('user_id', '=', auth()->id())->select('id', 'type', 'whichcourse', 'whenexpecting', 'intendedstudydestination', 'intendedjoblocation', 'gotjob', 'interestedprofession', 'qualifiedforjob', 'whyrelocate', 'likeconsultation', 'eligibleforcountry')->get();
//
//
//



        //$goals = UserGoals::all()->where('user_id', '=', auth()->id())->select('id', 'type', 'whichcourse', 'whenexpecting', 'intendedstudydestination', 'intendedjoblocation', 'gotjob', 'interestedprofession', 'qualifiedforjob', 'whyrelocate', 'likeconsultation', 'eligibleforcountry')->get();
        //$financialPlan = UserFinancialPlan::all()->where('user_id', '=', auth()->id())->select('id', 'financial_support', 'budget')->get();


//        $tasksNotCompleted = $tasks->filter(function ($task, $key) {
//            return !$task->status;
//        })->values();

        }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_study(Request $request){


            $this->validate(request(),[
                'subject' => 'required',
                'study' => 'required',
                'destination' => 'required',
                'when'=> 'required',
                'education' => 'required',
                'recentmajorprogramme' => 'required',
                'recentinstitution' => 'required',
                'grade' => 'required',
                'language'=>'required',
        ]);

//        $request->merge(
//            [ 'language' => implode(',',
//                (array) $request->get('language')) ]);
//        $request->replace(
//            [ 'undergraduate' => implode(',',
//                (array) $request->get('undergraduate')) ]);
//        $request->replace(
//            [ 'postgraduate' => implode(',',
//                (array) $request->get('postgraduate')) ]);
        //dd($request->getContent());
        $data = json_decode($request->getContent());

        $lang = implode(',', (array)$data->language);

        $undergraduate = implode(',', (array)$data->undergraduate);
        $postgraduate = implode(',', (array)$data->postgraduate);
        $userstudygoals = UserEducation::where('user_id', Auth()->id())->first();

        if(!$userstudygoals){
            $userstudygoals= new UserEducation();
        }

        $userstudygoals->user_id= Auth()->id();
        $userstudygoals->subject= $data->subject;
        $userstudygoals->study= $data->study;
        $userstudygoals->destination= $data->destination;
        $userstudygoals->when= $data->when;
        $userstudygoals->language= $lang;
        $userstudygoals->undergraduate= $undergraduate;
        $userstudygoals->postgraduate= $postgraduate;
        $userstudygoals->education= $data->education;
        $userstudygoals->recentmajorprogramme= $data->recentmajorprogramme;
        $userstudygoals->recentinstitution= $data->recentinstitution;
        $userstudygoals->grade= $data->grade;

        $userstudygoals->save();
        //$request->session()->flash('status', 'You have updated your interests!');

        return ['message'=>'Study goals saved!'];

    }
    public function store_work(Request $request){

        $this->validate(request(),[
           // 'startingdate' => 'required',
            'gotjob' => 'required',
            'jobtitle' => 'required',
            'company'=> 'required',

        ]);
        $data = json_decode($request->getContent());

        dd($data);
        $userworkgoals = UserWork::where('user_id', Auth()->id())->first();

        if(!$userworkgoals){
            $userworkgoals= new UserWork();
        }
        $userworkgoals->user_id= Auth()->id();
        $userworkgoals->company= $data->company;
        $userworkgoals->gotjob= $data->gotjob;
        $userworkgoals->jobtitle= $data->jobtitle;
        $userworkgoals->skill_sets= $data->skill_sets;
        $userworkgoals->professional_certifications= $data->professional_certifications;



        $userworkgoals->save();


        return ['message'=>'Work abroad goals saved!'];

    }
    public function store_relocate(Request $request){

        $this->validate(request(),[
            'whyrelocate' => 'required',
            'eligible' => 'required',
            'consultation' => 'required',
            'education' => 'required',
            'recentmajorprogramme' => 'required',
            'recentinstitution' => 'required',
            'grade' => 'required',
            'language'=>'required',
        ]);
        $data = json_decode($request->getContent());
        $lang = implode(',', (array)$data->language);
        $undergraduate = implode(',', (array)$data->undergraduate);
        $postgraduate = implode(',', (array)$data->postgraduate);

        $userrelocategoals = UserRelocateGoals::where('user_id', Auth()->id())->first();
        if(!$userrelocategoals){
            $userrelocategoals= new UserRelocateGoals();
        }
        $userrelocategoals->user_id= Auth()->id();
        $userrelocategoals->whyrelocate= $data->whyrelocate;
        $userrelocategoals->eligible= $data->eligible;
        $userrelocategoals->consultation= $data->consultation;
        $userrelocategoals->language= $lang;
        $userrelocategoals->undergraduate= $undergraduate;
        $userrelocategoals->postgraduate= $postgraduate;
        $userrelocategoals->education= $data->education;
        $userrelocategoals->recentmajorprogramme= $data->recentmajorprogramme;
        $userrelocategoals->recentinstitution= $data->recentinstitution;
        $userrelocategoals->grade= $data->grade;

        $userrelocategoals->save();

        return ['message'=>'Relocation goals saved!'];

    }





    public function get_work()
    {

        $user_work = UserWork::where('user_id', Auth()->id())->first();


        return response()->json($user_work);

    }

}
