<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FooterController extends Controller
{

    public function index(Request $request){
        $msg='ok';
        $wrg='no';
     if($request->A+$request->B==$request->sum){
         return redirect()->back()->with('success', $msg);
     }
        return redirect()->back()->with('warning', $wrg);
    }
}
