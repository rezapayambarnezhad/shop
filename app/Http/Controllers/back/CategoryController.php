<?php

namespace App\Http\Controllers\back;
use App\Article;
use App\category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories=category::paginate(10);
        return view('back.categories.categories',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('back.categories.create');
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
        $msg=[
            'name.required'=>'filde name ra vared konid',
            'slug.required'=>'filde mostar ra vared konid',
            'slug.unique'=>'filde mostar tekrari ast ra vared konid',
        ];
        $validatedData = $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories',
        ],$msg);

        $category=new category();
        $category->create($request->all());
        $msg='zakhire anjam shod';
        return redirect(route('admin.categories'))->with('success',$msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
        //
        return view('back.categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category)
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
        $category->update($request->all());

        $msg='zakhire anjam shod';
        return redirect(route('admin.categories'))->with('success',$msg);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
        //
        $category->delete();
        $msg='hazf anjam shod';
        return redirect(route('admin.categories'))->with('success',$msg);
    }
}
