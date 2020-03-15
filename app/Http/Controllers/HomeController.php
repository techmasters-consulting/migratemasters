<?php

namespace App\Http\Controllers;


use App\Services;
use Illuminate\Support\Facades\DB;
use Spatie\Tags\Tag;


class HomeController extends Controller
{

    public function index()
    {
        //dd(auth('api')->user());
        $articles = $this->getArticleMenu();
        $services = Services::where('country',0)->take(7)->latest()->get();
        $articlesList = DB::table('articles')
            ->latest()
            ->limit(3)
            ->get();


        ##fetch tag based on type from the db
        $countryService =  Tag::getWithType('country')->pluck('id')->toArray();
        ##register country tabs to the views
        $australia = DB::table('taggables')->where('tag_id',    $countryService['0'])->pluck('taggable_id');
        $canadas = DB::table('taggables')->where('tag_id',    $countryService['1'])->pluck('taggable_id');
        $uks = DB::table('taggables')->where('tag_id',    $countryService['2'])->pluck('taggable_id');
        $usas = DB::table('taggables')->where('tag_id',    $countryService['3'])->pluck('taggable_id');
        $germanys = DB::table('taggables')->where('tag_id',    $countryService['4'])->pluck('taggable_id');
        $netherlands = DB::table('taggables')->where('tag_id',    $countryService['5'])->pluck('taggable_id');
        $frances = DB::table('taggables')->where('tag_id',    $countryService['6'])->pluck('taggable_id');
        $mauritiuss = DB::table('taggables')->where('tag_id',    $countryService['7'])->pluck('taggable_id');
        #austrila
        $australiaArray = array();
        foreach($australia as $australiaData){
            $australiaPush =  DB::table('services')->where('id',    $australiaData)->first();
            $australiaArray[] = $australiaPush;
        }
        $australia = $australiaArray;
        ##canada
        $canadaArray = array();
        foreach($canadas as $canadasData){
            $canadaPush =  DB::table('services')->where('id',    $canadasData)->first();
            $canadaArray[] = $canadaPush;
        }
        $canada = $canadaArray;

        ##uk
        $ukArray = array();
        foreach($uks as $ukData){
            $ukPush =  DB::table('services')->where('id',    $ukData)->first();
            $ukArray[] = $ukPush;
        }
        $uk = $ukArray;

        ##us
        $usaArray = array();
        foreach($usas as $usaData){
            $usaPush =  DB::table('services')->where('id',    $usaData)->first();
            $usaArray[] = $usaPush;
        }
        $usa = $usaArray;

        ##germany
        $germanyArray = array();
        foreach($germanys as $germanyData){
            $germanyPush =  DB::table('services')->where('id',    $germanyData)->first();
            $germanyArray[] = $germanyPush;
        }
        $germany = $germanyArray;


        ##frances
        $franceArray = array();
        foreach($frances as $franceData){
            $francePush =  DB::table('services')->where('id',    $franceData)->first();
            $franceArray[] = $francePush;
        }
        $france = $franceArray;

        ##netherland
        $netherlandArray = array();
        foreach($netherlands as $netherlandData){
            $netherlandPush =  DB::table('services')->where('id',    $netherlandData)->first();
            $netherlandArray[] = $netherlandPush;
        }
        $netherland = $netherlandArray;

        ##mauritius
        $mauritiusArray = array();
        foreach($mauritiuss as $mauritiusData){
            $mauritiusPush =  DB::table('services')->where('id',    $mauritiusData)->first();
            $mauritiusArray[] = $mauritiusPush;
        }
        $mauritius = $mauritiusArray;
        return view('index', compact('articles','services','articlesList','australia','canada','uk','usa','germany','netherland','france','mauritius'));
    }

    public function marker_info()
    {
        return view('become-a-marker');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
       public function about (){
           $articles = $this->getArticleMenu();
           $services = $this->getServiceMenu();

           return view('about', array('services'=>$services, 'articles'=>$articles));

       }
        public function faq(){
            $articles = $this->getArticleMenu();
            $services = $this->getServiceMenu();

            return view('faq', array('services'=>$services, 'articles'=>$articles));
        }
    public function contact(){
        $articles = $this->getArticleMenu();
        $services = $this->getServiceMenu();

        return view('contact', array('services'=>$services, 'articles'=>$articles));
    }



    function countryservice(){


//        array('australia'=>$australia,'australiaArray'=>$australiaArray,'uk'=>$uks,'usa'=>$usas,'germany'=>$germanys,'netherland'=>$netherlands,'france'=>$frances,'mauritius'=>$mauritiuss )
        return view('index',compact('australiaArray') );
    }
}
