<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use DB;

class SliderController extends Controller
{
    //________________ View Slider __________________//
    public function create()
    {
        return view('admin.slider.create');
    }

    //_________________ Insert Query _________________//
    public function store(Request $request)
    {
        $image = $request->file('image');
        $save_url = time() . '.' .$image->getClientOriginalextension();
        $image->move(public_path('images/'),$save_url); 
        $img_url = 'images/'.$save_url;
        Slider::create([
            'title_1' =>$request->title_1,
            'title_2' =>$request->title_2,
            'desc' =>$request->desc,
            'btn_text' =>$request->btn_text,
            'btn_url' =>$request->btn_link,
            'image' =>$img_url,
        ]);
        return redirect()->back();
    }

    //_________________ Show Query ___________________//
    public function index()
    {
        $data = Slider::all();
        return view('admin.slider.index',compact('data'));
    }


















}
