<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;
use Illuminate\Support\Facades\DB;
use Spatie\Tags\Tag;

class ArticlesController extends Controller
{
    function index(){

        $articles = new Articles();
      //  $articles = $this->getArticleMenu();
        $services = $this->getServiceMenu();
        $tags = DB::table('tags')
            ->get();

       // $dd =$articles->tagsWithType('brother');
        $dd =   Tag::findOrCreate('headline', 'newsTag');
        dd($dd);
        return view('articles.index', array('services'=>$services, 'articles'=>$articles,'tags'=>$tags));
        //$articles = Articles::where('is_published','true')->get();
        //$tags = Tags::pluck('name', 'id')->toArray();

//        if(!$articles){
//            abort(404, 'sorry, we didnt get any');
//        }

        //return view('articles.index', compact('articles'));

    }


    function searchDisplayTags(Request $request){

       $tags = DB::table('taggables')->where('tag_id',$request->tag_id)->get();
       $fetchTags = DB::table('tags')->where('id',$request->tag_id)->get();
       foreach ($tags as $tag){
           $articlesTag = DB::table('articles')->where('id',$tag->taggable_id)->get();
       }
        $articles = $this->getArticleMenu();
        $services = $this->getServiceMenu();
        return view('articles.tag', array('articles'=>$articles,'articlesTag'=>$articlesTag,'services'=>$services,'tags'=>$fetchTags));
    }

    function show($slug){

        $articles = $this->getArticleMenu();
        $services = $this->getServiceMenu();
        $tags = DB::table('tags')
            ->get();


        $article_detail= Articles::where('slug',$slug)->firstorfail();
       ($article_detail);

        return view('articles.show', array('services'=>$services, 'articles'=>$articles, 'article_detail'=>$article_detail,'tags'=>$tags));

//       // return view('articles.show', compact($articles));
//        return view('articles.show',
//            [
//                'article'=> Articles::where('slug',$slug)->firstorfail()
//        ]);
    }
}
// <!-- @foreach ($articles->tags as $article_tag)
//                                             <span>   <a href="/tags/{{$article_tag->name}}">  {{$article_tag->name}} Immigration</a></span>
//                                         @endforeach -->