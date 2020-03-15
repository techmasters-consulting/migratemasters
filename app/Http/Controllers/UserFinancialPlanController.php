<?php

namespace App\Http\Controllers;

use App\UserFinancialPlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserFinancialPlanController extends Controller
{


    public function store (Request $request)
    {


       // if($request->sponsor){



            $this->validate($request,[
                'sponsor' => 'required',
                'budget' => 'required',

            ]);

        $financial_plan = UserFinancialPlan::where('user_id', Auth()->id())->first();

        if(!$financial_plan){
            $financial_plan = new UserFinancialPlan();
            $financial_plan->user_id = Auth()->id();
        }

        $financial_plan->sponsor = $request->sponsor;
        $financial_plan->budget = $request->budget;
        $financial_plan->save();
       // }
        return ['message'=>'Your financial  plan is  saved!'];

    }


    function get_finsup(){

        $financialPlan = UserFinancialPlan::where('user_id', auth()->id())->get();
        return $financialPlan[0];

    }

    public function store_finsup(Request $request){

        $this->validate(request(),[
            'sponsor' => 'required',
            'budget' => 'required',

        ]);
        $data = json_decode($request->getContent());

        $finsup = UserFinancialPlan::where('user_id', Auth()->id())->first();
        if(!$finsup){
            $finsup= new UserFinancialPlan();
        }
        $finsup->user_id = Auth()->id();
        $finsup->sponsor= $data->sponsor;
        $finsup->budget= $data->budget;


        $finsup->save();

        return ['message'=>'Financial Plan saved!'];

    }
}
