<?php

namespace App\Http\Controllers\back;
use App\category;
use App\Http\Controllers\Controller;
use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articles=Article::paginate(10);
//        dd($articles);
        return view('back.articles.articles',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
//        $categories=category::all()->pluck('name','id');
        $categories=category::all();
        return view('back.articles.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
//        dd($request);
        $msg=[
            'name.required'=>'filde name ra vared konid',
            'slug.required'=>'filde mostar ra vared konid',
            'slug.unique'=>'filde mostar tekrari ast ra vared konid',
        ];
        $validatedData = $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories',
        ],$msg);

        $article=new Article();
        $article=$article->create($request->all());
        $article->categories()->attach($request->categories);

        $msg='zakhire anjam shod';
        return redirect(route('admin.articles'))->with('success',$msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
        $categories=category::all()->pluck('name','id');
        $categories=category::all();
        return view('back.articles.edit',compact('article','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
        $msg=[
            'name.required'=>'filde name ra vared konid',
            'slug.required'=>'filde mostar ra vared konid',
            'slug.unique'=>'filde mostar tekrari ast ra vared konid',
        ];
        $validatedData = $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories',
        ],$msg);

        $article->update($request->all());
        $article->categories()->sync($request->categories);

        $msg='zakhire anjam shod';
        return redirect(route('admin.articles'))->with('success',$msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
        $article->delete();
        $msg='Article delete';
        return redirect(route('admin.articles'))->with('success',$msg);
    }

    public function test(Article $article){
//        dd($article);
        if($article->suggestion==1){
            $article->suggestion=0;
            $article->save();
            $mas='UN suggest';
            return redirect(route('admin.articles'))->with('success',$mas);
        }else{
            $article->suggestion=1;
            $article->save();
            $mas='suggest';
            return redirect(route('admin.articles'))->with('success',$mas);
        }

    }

    public function status(Article $article){

        if($article->status==1){
            $article->status=0;
        }else{
            $article->status=1;
        }
        $article->save();
        $mas='ba movafaghiyat taghir vaziyat anjam shod';
        return redirect(route('admin.articles'))->with('success',$mas);



    }



}
