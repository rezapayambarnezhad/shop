<?php

namespace App\Http\Controllers\front;

use App\Article;
use App\category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {

        $search = $request->search;
        if ($search == null) {
            $msg = 'کلمه ای وارد نشد';
            return redirect()->back();
        }
        $articles = Article::get();
        $categories = category::get();
        if ($request->category == 0) {
            $result = $articles;
            return view('front.search', compact('search', 'result'));
        } else {
            foreach ($categories as $category) {
                if ($category->id == $request->category) {
                    $results = $category->articles()->get();
                }
            }
            $result = $results;
            return view('front.search', compact('search', 'result'));
        }


    }
}
