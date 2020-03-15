<?php

namespace App\Http\Controllers;
use App\UserVisitedCountries;
use Illuminate\Http\Request;

class UserVisitedCountriesController extends Controller
{
    public function store (Request $request)
    {
        // if($request->dependant){

        $this->validate($request,[
                'country' => 'required',
                'year' => 'required',
                'duration' => 'required',
            ]
        );

        UserVisitedCountries::create([
            'user_id' => Auth()->id(),
            'year' => $request->year,
            'duration' =>$request->duration,
            'country'=> $request->country,
        ]);
        return response()->json('Your Background info has been saved!');
    }

    public function get_countries_visited()
    {

       $visitedcountries = UserVisitedCountries::where('user_id', Auth()->id())->get();

return response()->json($visitedcountries);

    }

    public function delete_countries_visited($id)
    {
        $delete_countries_visited = UserVisitedCountries::where('id', $id)->first();
        $delete_countries_visited->delete();
        return ['message' => 'Visited country Deleted'];

    }


}
