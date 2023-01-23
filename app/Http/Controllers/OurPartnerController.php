<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OurPartner;
use DB;
use Symfony\Component\VarDumper\Caster\RedisCaster;

class OurPartnerController extends Controller
{
    //_____________ View Query______________//
    public function Create()
    {
        //return 'view partner';
        return view('admin.partner.create');
    }

    //_______________ Insert Query__________________//
    public function store(Request $request)
    {
        $image = $request->file('image');
        $save_url = time() . '.' .$image->getClientOriginalextension();
        $image->move(public_path('images/'),$save_url); 
        $img_url = 'images/'.$save_url;
        OurPartner::create([
            'image' =>$img_url,
        ]);
        return redirect()->route('partner.create');
    }

    //_______________ Show Query ________________//
    public function index()
    {
        $data = OurPartner::all();
        return view('admin.partner.index',compact('data'));
    }

    //__________________ Edit Query ___________________//
    public function edit($id)
    {
        //return $id;
        $data = OurPartner::find($id);
        return view('admin.partner.edit',compact('data'));
    }

    //________________ Update Query_________________//
    public function update(Request $request)
    {
        $edit_id = $request->PartEditId;
        $partner = OurPartner::findOrFail($edit_id);
        if($request->file('image')){
            if(file_exists($partner->image)){
                unlink($partner->image);
                }
    
                $image = $request->file('image');
                $save_url = time() . '.' .$image->getClientOriginalextension();
                $image->move(public_path('images/'),$save_url); 
                $img_url = 'images/'.$save_url;
    
                OurPartner::findOrFail($edit_id)->update([
                        'image' =>$img_url,    
                    ]);
            }

        else{
            OurPartner::findOrFail($edit_id)->update([
                'image' =>$img_url,          
            ]);
            }

        return redirect()->route('partner.index');
    }

    //_____________ Delete Query _______________//
    public function Distroy($id)
    {
        $data = OurPartner::find($id)->delete();
        return redirect()->route('partner.index');
    }








}
