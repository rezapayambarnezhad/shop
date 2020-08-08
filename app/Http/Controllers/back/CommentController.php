<?php

namespace App\Http\Controllers\back;
use App\Comment;
use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function index(){
        $comments=Comment::paginate(10);
        return view('back.comments.comments',compact('comments'));
    }


    public function edit(Comment $comment)
    {
        //
//        $comments=Comment::all();
//        dd($comments);
        return view('back.comments.edit',compact('comment'));
    }

    public function update(Request $request, Comment $comment)
    {

        //
        $msg=[
            'name.required'=>'filde name ra vared konid',
            'email.required'=>'filde mostar ra vared konid',
            'body.unique'=>'filde mostar tekrari ast ra vared konid',
        ];
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'body' => 'required',
        ],$msg);

        $comment->update($request->all());
//        $comment->categories()->sync($request->categories);
        $msg='zakhire anjam shod';
        return redirect(route('admin.comments'))->with('success',$msg);
    }

    public function destroy(Comment $comment)
    {
        //
        $comment->delete();
        $msg='did delete';
        return redirect(route('admin.comments'))->with('success',$msg);
    }

    public function status(Comment $comment){
        if ($comment->status==1){
            $comment->status=0;
        }

        else{
            $comment->status=1;
        }
        $comment->save();
        $msg='bamoafaghiyat save shod';
        return redirect(route('admin.comments'))->with('success',$msg);


    }
}
