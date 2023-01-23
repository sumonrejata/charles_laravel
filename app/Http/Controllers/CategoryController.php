<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;
use DB;

class CategoryController extends Controller
{
    //________________ View Category _______________//
    public function create()
    {
        return view('admin.category.create');
    }

 //________________ Insert Category _______________//
    public function store(Request $request)
    {
        Category::create([
            'title' =>$request->title,
            'slug'  =>Str::of($request->title)->slug('-'),
        ]);
        return redirect()->back();
    }

    //________________ Show Category _______________//
    public function index()
    {
        $data = Category::all();
        return view('admin.category.index',compact('data'));
    }

    //________________ Edit Category _______________//
    public function edit($id)
    {
        //return $id;
        $data = Category::find($id);
        return view('admin.category.edit',compact('data'));
    }

    //________________ Update Category _______________//
    public function update(Request $request)
    {
        $edit_id = $request->CatEditId;
        Category::findOrFail( $edit_id)->update([
            'title' =>$request->title,
            'slug'  =>Str::of($request->title)->slug('-'),
        ]);
        return redirect()->route('category.index');
    }

    //________________ Distroy Category _______________//
    public function Distroy($id)
    {
        $data = Category::find($id)->delete();
        return redirect()->back();

    }












}
