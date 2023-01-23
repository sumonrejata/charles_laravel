<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use DB;

class AboutController extends Controller
{
    //_________About view____________//

    public function Create()
    {
        return view('admin.about.create');
    }

    //___________About Insert Query____________//
    public function Store(Request $request)
    {
        $image = $request->file('image');
        $save_url = time() . '.' .$image->getClientOriginalextension();
        $image->move(public_path('images/'),$save_url); 
        $img_url = 'images/'.$save_url;
        About::create([
            'title' =>$request->title,
            'description' =>$request->description,
            'image' =>$img_url,
        ]);
        return redirect()->route('about.create');
    }

    //________Show about Info Query_________//
    public function index()
    {
        $about = About::all();
        return view('admin.about.index',compact('about'));
    }

    //________________Edit about Query_________________//
    public function Edit($id)
    {
        //return $id;
        $about_edit = About::where('id',$id)->first();
        return view('admin.about.edit',compact('about_edit'));
    }

    //_________Update About Query__________//
    public function Update(Request $request)
    {
        $edit_id = $request->aboutEditId;
        $about_update = About::findOrFail($edit_id);
        if($request->file('image')){
            if(file_exists($about_update->image)){
                unlink($about_update->image);
                   }
    
                   $image = $request->file('image');
                   $save_url = time() . '.' .$image->getClientOriginalextension();
                   $image->move(public_path('images/'),$save_url); 
                   $img_url = 'images/'.$save_url;
    
                   About::findOrFail($edit_id)->update([
                        'title' =>$request->title,
                        'description' =>$request->description,
                        'image' =>$img_url,    
                     ]);
          }
  
          else{
            About::findOrFail($edit_id)->update([
                'title' =>$request->title,
                'description' =>$request->description,             
             ]);
            }
  
            return redirect()->route('about.index');
    }

    //___________Delete About Query____________//
    public function Distroy($id)
    {
        DB::table('abouts')->where('id',$id)->delete();
        return redirect()->back();
    }



}
