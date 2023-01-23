<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use DB;

class TagController extends Controller
{
    //____________ View Tag ___________//
    public function create()
    {
        return view('admin.tag.create');
    }

     //____________ Insert Tag ___________//
    public function store(Request $request)
    {
        Tag::create([
            'name' =>$request->name,
        ]);
        return redirect()->back();
    }

    //____________ Show Tag ___________//
    public function index()
    {
        $data = Tag::all();
        return view('admin.tag.index',compact('data'));
    }

    //____________ Edit Tag ___________//
    public function edit($id)
    {
        $data = Tag::find($id);
        return view('admin.tag.edit',compact('data'));
    }

    //____________ Update Tag ___________//
    public function update(Request $request)
    {
        $edit_id = $request->TagEditId;
        Tag::findOrFail($edit_id)->update([
            'name' =>$request->name,
        ]);
        return redirect()->route('tag.index'); 
    }

      //____________ Delete Tag ___________//
      public function Distroy($id)
      {
        $data = Tag::find($id)->delete();
        return redirect()->back();
      }














}
