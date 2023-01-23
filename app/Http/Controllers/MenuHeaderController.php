<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuHeader;
use DB;

class MenuHeaderController extends Controller
{

    //_________ Menu View ___________//
    public function create()
    {
        return view('admin.menu.create');
    }

    //_________ Insert Menu  ___________//
    public function store(Request $request)
    {
        $validated = $request->validate([
            'menu_title' => 'required',
        ]);

        MenuHeader::create([
            'menu_title' =>$request->menu_title,
        ]);
        return redirect()->back();
    }

    //_________ Show Menu  ___________//
    public function index()
    {
        $data = MenuHeader::all();
        return view('admin.menu.index',compact('data'));
    }

    //_________ Edit Menu  ___________//
    public function edit($id)
    {
        //return $id;
        $data = MenuHeader::find($id);
        return view('admin.menu.edit',compact('data'));
    }

    //_________ Update Menu  ___________//
    public function update(Request $request)
    {
        $edit_id = $request->MenuEditId;
        MenuHeader::findOrFail($edit_id)->update([
            'menu_title' =>$request->menu_title,           
        ]);
        return redirect()->route('menu.index');
    }

    //_________ Delete Menu  ___________//
    public function Distroy($id)
    {
        $data = MenuHeader::find($id)->delete();
        return redirect()->back();
    }


    









}
