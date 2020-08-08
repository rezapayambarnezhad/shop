<?php

namespace App\Http\Controllers\back;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
        $users=User::paginate(10);
        return view('back.users.users',compact('users'));
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

        return view('back.users.profile',compact('user'));
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
        $mas='ba movafaghiyat sabt shod';
        return redirect(route('admin.users'))->with('success',$mas);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
        $user->delete();
        $mas='ba movafaghiyat hazf shod';
        return redirect(route('admin.users'))->with('success',$mas);
    }

    public function status(User $user){

        if($user->status==1){
            $user->status=0;
        }else{
            $user->status=1;
        }
        $user->save();
        $mas='ba movafaghiyat taghir vaziyat anjam shod';
        return redirect(route('admin.users'))->with('success',$mas);

    }
}
