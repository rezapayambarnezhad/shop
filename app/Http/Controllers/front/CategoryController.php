<?php

namespace App\Http\Controllers\front;

use App\category;
use App\Http\Controllers\Controller;
use App\Article;
use Illuminate\Http\Request;




class CategoryController extends Controller
{
    public function index(){

        $categories=category::get();
//        dd($categories);

        return view('front.categories',compact('categories'));
    }
    public function show(category $category){

//        $test=$category->articles()->where('status',1)->paginate(1);
//        $articles=Article::paginate(1);
        return view('front.category',compact('category'));
    }
}
