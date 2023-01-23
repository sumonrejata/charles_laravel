<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutSub;
use DB;

class AboutSubController extends Controller
{
    //__________Sub About view__________//
    public function Create()
    {
        return view('admin.Aboutsub.create');
    }

    //____________Sub About Insert Query______________//
    public function Store(Request $request)
    {
        AboutSub::create([
            'title' =>$request->title,
            'icon' =>$request->icon,
        ]);
        return redirect()->route('aboutsub.create');
    }

    //____________Sub About Show_____________//
    public function index()
    {
        $subabout = AboutSub::all();
        return view('admin.Aboutsub.index',compact('subabout'));

    }

    //_______________Sub About Edit_______________//
    public function Edit($id)
    {
        //return $id;
        $sub_about = DB::table('about_subs')->where('id',$id)->first();
        return view('admin.Aboutsub.edit',compact('sub_about'));
    }

    //__________Sub About Update______________//
    public function Update(Request $request)
    {
        $edit_id = $request->aboutEditId;
        AboutSub::findOrFail($edit_id)->update([
            'title' =>$request->title,
            'icon' =>$request->icon,  
         ]);
          
            return redirect()->route('aboutsub.index');
    }












}
