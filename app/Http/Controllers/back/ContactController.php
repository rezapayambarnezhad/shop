<?php

namespace App\Http\Controllers\back;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contacts=Contact::orderby('id','DESC')->paginate(10);
//        $count=Contact::get()->where('status',0)->count();
//        dd($count);
        return view('back.contacts.contacts',compact('contacts'));
    }
//    public function edit(){
////        $contacts=Contact::orderby('id','DESC')->paginate(10);
//////        $count=Contact::get()->where('status',0)->count();
//////        dd($count);
//        return view('back.contacts.contact',compact('contacts'));
//    }
    public function destroy(Contact $contact)
    {
        $contact->delete();
        $msg='contact deleted';
        return redirect(route('admin.contacts'))->with('success',$msg);
//        return back()->with('success',$msg);
    }

    public function status(Contact $contact){

        if($contact->status==0){
            $contact->status=1;
        }
//        else{
//            $contact->status=1;
//        }
        $contact->save();
//        $mas=$contact->id;
//        return redirect(route('admin.comments.edit',$mas),compact('contact'));
        return view('back.contacts.contact',compact('contact'));

    }

}
