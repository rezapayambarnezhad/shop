<?php

namespace App\Http\Controllers\front;

use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){

        $articles=Article::orderby('id','DESC')->where('status',1)->paginate(10);
//        dd($articles);

        return view('front.articles',compact('articles'));
    }
    public function show(Article $article){

        $article->increment('hit');
        $comments=$article->comments()->where('status',1)->get();
        return view('front.article',compact('article','comments'));
    }
}
