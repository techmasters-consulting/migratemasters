<?php

namespace App\Http\Controllers;

use App\UserTestimonial;
use Illuminate\Http\Request;

class UserTestimonialController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth','verified'] );
        //$this->middleware('verified');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('index',[

            'userTestimonials' => UserTestimonial::paginate(3)->latest('isPublished')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('testimonials.create');
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


        $this->validate(request(),[

            'title' => 'required',
            'body' => 'required',
            'excerpt'=> 'required',
            'make_public' => 'required',
            'rate_us' => 'required',

        ]);

//        $data = json_decode($request->getContent());
//        $lang = implode(',', (array)$data->language);
//        $undergraduate = implode(',', (array)$data->undergraduate);
//        $postgraduate = implode(',', (array)$data->postgraduate);



         UserTestimonial::create([


            'user' => Auth()->id(),
            'title' => $request->title,
            'body' =>$request->body,
            'excerpt'=> $request->excerpt,
            'make_public' =>$request->make_public,
            'rate_us' => $request->rate_us,

        ]);


        return ['message'=>'testimonial saved!'];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserTestimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
//    public function show(UserTestimonial $testimonial)
//    {
//        //
//        return view('testimonials.show', ['testimonial' => $testimonial]);
//    }
    public function show($testimonial)
    {
        //

        return view('testimonials.show', UserTestimonial::find($testimonial));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserTestimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(UserTestimonial $testimonial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserTestimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserTestimonial $testimonial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserTestimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserTestimonial $testimonial)
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function retrieve()
    {
        //
        $testimonials = UserTestimonial::with(array('user'=>function($query){
            $query->select('id','avatar','fname','lname');
        }))->get();


       // return response()->json($user_work);
        return response()->json($testimonials);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function retrieveOne($user)
    {
        //, 'make_public'=>'yes'
        $testimonials = UserTestimonial::where('user_id', $user )->with(array('user'=>function($query){
        $query->select('id','avatar','fname','lname');
    }))->latest->get();


        // return response()->json($user_work);
        return response()->json($testimonials);
    }
}
