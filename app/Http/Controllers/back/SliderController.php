<?php

namespace App\Http\Controllers\back;
use App\Slider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders=Slider::paginate(5);
        return view('back.slider.sliders',compact('sliders'));
    }



    public function store(Request $request)
    {
        //
        $msg=[
            'name.required'=>'filde name ra vared konid',
//            'text.required'=>'filde mostar ra vared konid',
            'image.unique'=>'filde mostar tekrari ast ra vared konid',
        ];
        $validatedData = $request->validate([
            'name' => 'required',
//            'text' => 'required',
            'image' => 'required',
        ],$msg);

        $slider=new Slider();
        $slider->create($request->all());

        $msg='nazar sabt shod .badaz taied modir namayash dade mishavad';
        return back()->with('success',$msg);
    }



    public function destroy(Slider $slider)
    {
        $slider->delete();
        $msg='slider deleted';
        return redirect(route('admin.sliders'))->with('success',$msg);
//        return back()->with('success',$msg);
    }

    public function status(Slider $slider){

        if($slider->status==1){
            $slider->status=0;
        }else{
            $slider->status=1;
        }
        $slider->save();
        $mas='ba movafaghiyat taghir vaziyat anjam shod';
        return redirect(route('admin.articles'))->with('success',$mas);

    }
}
