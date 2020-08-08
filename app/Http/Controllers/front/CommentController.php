<?php

namespace App\Http\Controllers\front;

use App\Article;
use App\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function store(Article $article,Request $request){


        $msg=[
            'name.required'=>'filde name ra vared konid',
            'email.required'=>'filde mostar ra vared konid',
            'body.unique'=>'filde mostar tekrari ast ra vared konid',
            'g-recaptcha-response' => 'recaptcha',
        ];
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'body' => 'required',
            recaptchaFieldName() => recaptchaRuleName()
        ],$msg);

        $article->comments()->create([
            'name'=>$request->name,
            'email'=>$request->email,
            'body'=>$request->body

        ]);
        $msg='nazar sabt shod .badaz taied modir namayash dade mishavad';
        return back()->with('success',$msg);
    }
}
