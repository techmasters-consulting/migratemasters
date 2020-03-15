<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SinglePageController extends Controller
{


    public function __construct()
    {
        $this->middleware(['auth','verified'] );
        //$this->middleware('verified');
    }
    public function index()
    {
        $success['token'] = Auth::user()->createToken('MyApp')->accessToken;
        $success['name'] = Auth::user()->name;

        //return response()->json(['success' => $success]);
        return view("landing", ['success' => $success]);
    }
}
