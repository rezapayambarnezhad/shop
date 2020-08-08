<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
//        dd($user);
        return view('front.auth.profile',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,User $user)
    {
        //
        $msg=[
            'name.required'=>'خالی',
            'email.required'=>'خالی',
            'phone.required'=>'خالی',
        ];
       if(!empty($request->password)){
           $validatedData = $request->validate([
               'name' => 'required',
               'email' => 'required',
               'phone' => 'required',
               'password' => 'min:8'
           ],$msg);
           $password=Hash::make($request->password) ;
           $user->password=$password;

       }
       else{
           $validatedData = $request->validate([
               'name' => 'required',
               'email' => 'required',
               'phone' => 'required',
           ],$msg);
       }
       $user->name=$request->name;
        $user->email=$request->email;
        $user->phone=$request->phone;


        $user->save();
        return redirect(route('main'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
