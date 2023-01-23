<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HeaderLogo;
use DB;

class HeaderLogoController extends Controller
{
    //________________ View Header logo________________//
    public function create()
    {
        return view('admin.admin_header.create');
    }

    //________________ Insert Query ___________________//
    public function store(Request $request)
    {
        $image = $request->file('image');
        $save_url = time() . '.' .$image->getClientOriginalextension();
        $image->move(public_path('images/'),$save_url); 
        $img_url = 'images/'.$save_url;
        HeaderLogo::create([
            'image' =>$img_url,
        ]);
        return redirect()->route('headerlogo.create');
    }

    //__________________ Show Query __________________//
    public function index()
    {
        $data = HeaderLogo::all();
        return view('admin.admin_header.index',compact('data'));
    }

    //___________________ Edit Query _____________________//
    public function edit($id)
    {
       $data = HeaderLogo::find($id);
       return view('admin.admin_header.edit',compact('data'));
    }

    //________________ Update Query ___________________//
    public function update(Request $request)
    {
        $edit_id = $request->logoEditId;
        $partner = HeaderLogo::findOrFail($edit_id);
        if($request->file('image')){
            if(file_exists($partner->image)){
                unlink($partner->image);
                }
    
                $image = $request->file('image');
                $save_url = time() . '.' .$image->getClientOriginalextension();
                $image->move(public_path('images/'),$save_url); 
                $img_url = 'images/'.$save_url;
    
                HeaderLogo::findOrFail($edit_id)->update([
                        'image' =>$img_url,    
                    ]);
            }

        else{
            HeaderLogo::findOrFail($edit_id)->update([
                'image' =>$img_url,          
            ]);
            }

        return redirect()->route('headerlogo.index');
    }

    //__________________ Delete Query _____________________//
    public function Distroy($id)
    {
        $data = HeaderLogo::find($id)->delete();
        return redirect()->back();
    }











}
