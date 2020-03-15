<?php

namespace App\Http\Controllers;

use App\Threads;
use Illuminate\Http\Request;

class ThreadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $threads = Threads::where('is_published','true')->get();

        if(!$threads){
            abort(404, 'sorry, we didnt get any');
        }

        return view('threads.index',compact('threads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Threads  $threads
     * @return \Illuminate\Http\Response
     */
    public function show(Threads $threads)
    {
        //
        return view('threads.show', compact($threads));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Threads  $threads
     * @return \Illuminate\Http\Response
     */
    public function edit(Threads $threads)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Threads  $threads
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Threads $threads)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Threads  $threads
     * @return \Illuminate\Http\Response
     */
    public function destroy(Threads $threads)
    {
        //
    }
}
