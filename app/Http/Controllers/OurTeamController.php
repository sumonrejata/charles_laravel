<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OurTeam;
use DB;

class OurTeamController extends Controller
{
    
    //__________ View Oure Team _____________//
    public function Create()
    {
        return view('admin.team.create');
    }

    //_______________ Insert Query________________//
    public function Store(Request $request)
    {
        $image = $request->file('image');
        $save_url = time() . '.' .$image->getClientOriginalextension();
        $image->move(public_path('images/'),$save_url); 
        $img_url = 'images/'.$save_url;
        OurTeam::create([
            'name' =>$request->name,
            'desig' =>$request->desig,
            'desc' =>$request->desc,
            'social_icon' =>$request->social_icon,
            'social_link' =>$request->social_link,
            'image' =>$img_url,
        ]);
        return redirect()->route('ourteam.create');
    }

    //____________ Show Query ____________//
    public function index()
    {
        $data = OurTeam::all();
        return view('admin.team.index',compact('data'));
    }

    //_____________ Edit Query _____________//
    public function Edit($id)
    {
        //return $id;
        $data = OurTeam::find($id);
        return view('admin.team.edit',compact('data'));
    }

    //____________ Update Query____________//
    public function Update(Request $request)
    {
        $edit_id = $request->TeamEditId;
        $tean = OurTeam::findOrFail($edit_id);
            if($request->file('image')){
                if(file_exists($tean->image)){
                    unlink($tean->image);
                    }
        
                    $image = $request->file('image');
                    $save_url = time() . '.' .$image->getClientOriginalextension();
                    $image->move(public_path('images/'),$save_url); 
                    $img_url = 'images/'.$save_url;
        
                    OurTeam::findOrFail($edit_id)->update([
                            'name' =>$request->name,
                            'desig' =>$request->desig,
                            'desc' =>$request->desc,
                            'social_icon' =>$request->social_icon,
                            'social_link' =>$request->social_link,
                            'image' =>$img_url,    
                        ]);
            }
  
            else{
                OurTeam::findOrFail($edit_id)->update([
                    'name' =>$request->name,
                    'desig' =>$request->desig,
                    'desc' =>$request->desc,
                    'social_icon' =>$request->social_icon,
                    'social_link' =>$request->social_link,            
                ]);
                }
  
            return redirect()->route('ourteam.index');
    }

    //_______________ Delete Query ________________//
    public function Distroy($id)
    {
        $data = OurTeam::find($id)->delete();
        return redirect()->back();
    }











}
