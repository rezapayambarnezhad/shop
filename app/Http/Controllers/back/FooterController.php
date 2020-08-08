<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Footer;
class FooterController extends Controller
{
    public function index(){
        $footers=Footer::get();
        $footer=$footers[0];
//        dd($footer);
        return view('back.footer.footer',compact('footer'));
    }

    public function update(Request $request, Footer $footer)
    {

//        dd($footer);
        $msg=[

            'body.unique'=>'filde mostar tekrari ast ra vared konid',
        ];
        $validatedData = $request->validate([
            'body' => 'required',
        ],$msg);

        $footer->update($request->all());

        $msg='zakhire anjam shod';
        return redirect(route('admin.footers'))->with('success',$msg);
    }
}
