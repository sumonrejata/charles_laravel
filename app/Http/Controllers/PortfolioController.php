<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use DB;

class PortfolioController extends Controller
{
    //________ View Portfolio ________//
    public function create()
    {
        return view('admin.portfolio.create');
    }

    //________ Insert Portfolio ________//
    public function store(Request $request)
    {
        $image = $request->file('image');
        $save_url = time() . '.' .$image->getClientOriginalextension();
        $image->move(public_path('images/'),$save_url); 
        $img_url = 'images/'.$save_url;
        Portfolio::create([
              'title'=>$request->title,
              'desc' =>$request->desc,
              'image' =>$img_url,
          ]);
        return redirect()->back();
    }

    //________ Show Portfolio ________//
    public function index()
    {
        $data = Portfolio::all();
        return view('admin.portfolio.index',compact('data'));
    }

     //________ Edit Portfolio ________//
     public function edit($id)
     {
        //return $id;
        $data = Portfolio::find($id);
        return view('admin.portfolio.edit',compact('data'));
     }

      //________ Update Portfolio ________//
      public function update(Request $request)
      {
        $edit_id = $request->PortEditId;
        $tean = Portfolio::findOrFail($edit_id);
            if($request->file('image')){
                if(file_exists($tean->image)){
                    unlink($tean->image);
                    }
        
                    $image = $request->file('image');
                    $save_url = time() . '.' .$image->getClientOriginalextension();
                    $image->move(public_path('images/'),$save_url); 
                    $img_url = 'images/'.$save_url;
        
                    Portfolio::findOrFail($edit_id)->update([
                            'title' =>$request->title,
                            'desc' =>$request->desc,
                            'image' =>$img_url,    
                        ]);
            }
  
            else{
                    Portfolio::findOrFail($edit_id)->update([
                        'title' =>$request->title,
                        'desc' =>$request->desc,           
                    ]);
                }
            return redirect()->route('portfolio.index');
      }

 //________ Delete Portfolio ________//
 public function Distroy($id)
 {
    $data = Portfolio::find($id)->delete();
    return redirect()->back();
 }











}
