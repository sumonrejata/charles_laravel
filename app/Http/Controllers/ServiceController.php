<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use DB;

class ServiceController extends Controller
{
    //___________service View ____________//
    public function Create()
    {
        return view('admin.service.create');
    }

    //__________Insert Query_____________//
    public function Store(Request $request)
    {
        $image = $request->file('image');
        $save_url = time() . '.' .$image->getClientOriginalextension();
        $image->move(public_path('images/'),$save_url); 
        $img_url = 'images/'.$save_url;
        Service::create([
            'title' =>$request->title,
            'desc' =>$request->desc,
            'btn_text' =>$request->btn_text,
            'image' =>$img_url,
        ]);
        return redirect()->route('service.create');
    }

    //________________Show Service______________//
    public function index()
    {
        $service = Service::all();
        return view('admin.service.index',compact('service'));
    }

    //________________Edit service______________________//
    public function Edit($id)
    {
        //return $id;
        $edit_service = Service::where('id',$id)->first();
        return view('admin.service.edit',compact('edit_service'));   
    }

    //____________Update Service______________//
    public function Update(Request $request)
    {
        $edit_id = $request->SerEditId;
        $service_upd = Service::findOrFail($edit_id);
            if($request->file('image')){
                if(file_exists($service_upd->image)){
                    unlink($service_upd->image);
                    }
        
                    $image = $request->file('image');
                    $save_url = time() . '.' .$image->getClientOriginalextension();
                    $image->move(public_path('images/'),$save_url); 
                    $img_url = 'images/'.$save_url;
        
                    Service::findOrFail($edit_id)->update([
                            'title' =>$request->title,
                            'desc' =>$request->desc,
                            'btn_text' =>$request->btn_text,
                            'image' =>$img_url,    
                        ]);
            }
  
            else{
                Service::findOrFail($edit_id)->update([
                    'title' =>$request->title,
                    'desc' =>$request->desc,             
                    'btn_text' =>$request->btn_text,             
                ]);
                }
  
            return redirect()->route('service.index');
    }

    //____________Delete Service_______________//
    public function Distroy($id)
    {
        DB::table('services')->where('id',$id)->delete();
        return redirect()->route('service.index');

    }










}
