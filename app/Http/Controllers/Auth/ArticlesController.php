<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;
class ArticlesController extends Controller
{
    function index(){


        $articles = $this->getArticleMenu();
        $services = $this->getServiceMenu();

        return view('articles.index', array('services'=>$services, 'articles'=>$articles));
        //$articles = Articles::where('is_published','true')->get();
        //$tags = Tags::pluck('name', 'id')->toArray();

//        if(!$articles){
//            abort(404, 'sorry, we didnt get any');
//        }

        //return view('articles.index', compact('articles'));

    }

    function show($slug){

        $articles = $this->getArticleMenu();
        $services = $this->getServiceMenu();
        $article_detail= Articles::where('slug',$slug)->firstorfail();

        return view('services.show', array('services'=>$services, 'articles'=>$articles, 'article_detail'=>$article_detail));

//       // return view('articles.show', compact($articles));
//        return view('articles.show',
//            [
//                'article'=> Articles::where('slug',$slug)->firstorfail()
//        ]);
    }
}
