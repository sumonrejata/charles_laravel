<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HeaderAddress;
use DB;

class HeaderAddressController extends Controller
{
    //____________ View Header Address _____________//
    public function create()
    {
        return view('admin.header_address.create');
    }

    //______________ Insert Query _______________//
    public function store(Request $request)
    {
        HeaderAddress::create([
            'title' =>$request->title,
            'desc' =>$request->desc,
            'icon' =>$request->icon,
        ]);
        return redirect()->back();
    }

    //_____________ Show Query _________________//
    public function index()
    {
        $data = HeaderAddress::all();
        return view('admin.header_address.index',compact('data'));
    }

    //_______________ Edit Query _______________//
    public function edit($id)
    {
        $data = HeaderAddress::find($id);
        return view('admin.header_address.edit',compact('data'));
    }

    //_______________ Update Query __________________//
    public function update(Request $request)
    {
        $edit_id = $request->EditId;
        HeaderAddress::findOrFail($edit_id)->update([
            'title' =>$request->title,
            'desc' =>$request->desc,
            'icon' =>$request->icon,
        ]);
        return redirect()->route('headeraddress.index');
    }

    //_______________ Delete Query _________________//
    public function Distroy($id)
    {
        $data = HeaderAddress::find($id)->delete();
        return redirect()->back();
    }









}
