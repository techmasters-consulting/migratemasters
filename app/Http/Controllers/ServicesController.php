<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;
use Illuminate\Support\Facades\DB;
use Spatie\Tags\Tag;

class ServicesController extends Controller
{
    function index(){

        //$articles = Services::where('is_published','true')->get();


//        if(!$articles){
//            abort(404, 'sorry, we didnt get any');
//        }
        $articles = $this->getArticleMenu();
        $services = $this->getServiceMenu();
        $articlesList = DB::table('articles')
            ->latest()
            ->limit(3)
            ->get();
        //Services = new Services();
        $countryService =  Tag::getWithType('country')->pluck('id')->toArray();
        ##register country tabs to the views
        $australia = DB::table('taggables')->where('tag_id',    $countryService['1'])->pluck('taggable_id');

        //foreach ($australia as $cdn){$australia =   DB::table('services')->where('id',    $cdn)->get();}



//        get$tag = Tag::findOrCreate('my tag');
        return view('services.index', array('services'=>$services, 'articles'=>$articles,'articlesList'=>$articlesList));
       // return view('services.index', compact('services'));

    }



    function show($slug){

        $articles = $this->getArticleMenu();
        $services = $this->getServiceMenu();
        $service_detail= Services::where('slug',$slug)->get();
//dd($service_detail);
        return view('services.show', array('services'=>$services, 'articles'=>$articles, 'service_detail'=>$service_detail));

//        $services= Services::where('slug',$slug)->get();
//        dd($services->title);
       // return view('articles.show', compact($articles));
//        return view('services.show',
//            [
//                'services'=> Services::where('slug',$slug)->get()
//
//        ]);
    }
}
