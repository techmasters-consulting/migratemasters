<?php

namespace App\Http\Controllers;

use App\UserDependant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDependantsController extends Controller
{
    public function store (Request $request)
    {
       // if($request->dependant){

            $this->validate($request,[
                'name' => 'required',
                'relationship' => 'required',
                'age' => 'required',
            ]);
        $dependant = new UserDependant;
            $dependant->user_id = Auth()->id();
            $dependant->name = $request->name;
            $dependant->relationship = $request->relationship;
            $dependant->age = $request->age;
            $dependant->save();
       // }
        return ['message'=>'Your Dependants goals saved!'];
    }

    public function get_dependents()
    {

        $user_dependents = UserDependant::where('user_id', Auth()->id())->get();

        return response()->json($user_dependents);

    }

    public function delete_dependents($id)
    {

        $user_dependents = UserDependant::where('id', $id);

        $user_dependents->delete();

        return ['message' => 'Dependent Deleted'];


    }
}
