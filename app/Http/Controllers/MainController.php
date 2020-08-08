<?php

namespace App\Http\Controllers;

use App\Article;
use App\category;
use Illuminate\Http\Request;
use App\Footer;
use App\Slider;
class MainController extends Controller
{
    public function index(){
        $sliders=Slider::get();

        $categories=category::get();
        foreach ($categories as $category){
            if($category->name=='normal'){
                $Products=$category->articles()->get();
            }else $Products=null;
            if($category->name=='stok'){
                $stoks=$category->articles()->get();
            }else $stoks=null;
        }
        $lasts=Article::take(6)->latest()->get()->where('status',1);
        $lasts=null;
//        dd($test);

//        dd($A,$B);
        return view('front.index',compact('sliders','Products','stoks','lasts'));
    }
}
