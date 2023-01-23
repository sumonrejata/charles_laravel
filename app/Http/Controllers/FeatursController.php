<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Featurs;
use DB;

class FeatursController extends Controller
{
    public function Create()
    {
        return view('admin.feature.create');
    }

    //_______Feature Insert Query_________//
    public function Store(Request $request)
    {
      $image = $request->file('image');
      $save_url = time() . '.' .$image->getClientOriginalextension();
      $image->move(public_path('images/'),$save_url); 
      $img_url = 'images/'.$save_url;
        Featurs::create([
            'title' =>$request->title,
            'description' =>$request->description,
            'image' =>$img_url,
        ]);
        return back();
    }

    //_________Features Show Query___________//
    public function index()
    {
        $features = Featurs::all();
        return view('admin.feature.index',compact('features'));
    }

    //_______Update Query_________//



    //_______Delete Query________//
    public function Distroy($id)
    {
        //DB::table('featurs')->where('id',$id)->delete();
        $feature = Featurs::find($id);
        $feature->delete();
        return redirect()->back();
    }

    //__________Edit Features____________//
    public function Edit($id)
    {
        //return $id;
        $feature = Featurs::where('id',$id)->first();
        return view('admin.feature.edit',compact('feature'));
    }

    //______Update Features__________//
    public function Update(Request $request)
    {
      $edit_id = $request->EditId;
      $feature = Featurs::findOrFail($edit_id);
      if($request->file('image')){
          if(file_exists($feature->image)){
              unlink($feature->image);
                 }
  
                 $image = $request->file('image');
                 $save_url = time() . '.' .$image->getClientOriginalextension();
                 $image->move(public_path('images/'),$save_url); 
                 $img_url = 'images/'.$save_url;
  
                 Featurs::findOrFail($edit_id)->update([
                      'title' =>$request->title,
                      'description' =>$request->description,
                      'image' =>$img_url,    
                   ]);
        }

        else{
          Featurs::findOrFail($edit_id)->update([

              'title' =>$request->title,
              'description' =>$request->description,             
           ]);
          }

          return redirect()->route('feature.index');
    }












}
