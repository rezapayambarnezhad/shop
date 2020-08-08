<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact;
class ContactController extends Controller
{
 public function index(){
     return view('front.contactus');
 }

    public function store(Request $request){

        $msg=[
            'name.required'=>'filde name ra vared konid',
            'body.required'=>'filde mostar tekrari ast ra vared konid',
        ];
        $validatedData = $request->validate([
            'name' => 'required',
            'body' => 'required',
            recaptchaFieldName() => recaptchaRuleName()
        ],$msg);

        $contact=new Contact();
        $contact->create($request->all());



        $msg='nazar sabt shod .badaz taied modir namayash dade mishavad';
        return redirect(route('contact'))->with('success',$msg);
    }
}
