<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HeaderIcon;
use DB;

class HeaderIconController extends Controller
{
    //_________ View Icon _________//
    public function create()
    {
        return view('admin.header_icon.create');
    }

    //_________ Insert Icon _________//
    public function store(Request $request)
    {
        HeaderIcon::create([
            'icon' =>$request->icon,
        ]);
        return redirect()->back();
        
    }

     //_________ Show Icon _________//
     public function index()
     {
        $data = HeaderIcon::all();
        return view('admin.header_icon.index',compact('data'));
     }

     //_________ Edit Icon _________//
     public function edit($id)
     {
        $data = HeaderIcon::find($id);
        return view('admin.header_icon.edit',compact('data'));
     }

      //_________ Update Icon _________//
      public function update(Request $request)
      {
        $edit_id = $request->IconEditId;
        HeaderIcon::findOrFail($edit_id)->update([
            'icon' =>$request->icon,
        ]);
        return redirect()->route('headericon.index');
      }

      //__________ Delete Icon__________//
      public function Distroy($id)
      {
        $data = HeaderIcon::find($id)->delete();
        return redirect()->back();
      }







}
