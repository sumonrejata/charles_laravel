<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Counter;
use DB;

class CounterController extends Controller
{
    
//________________ View Counter _________________//
public function Create()
{
    return view('admin.counter.create');
}

//__________________ Insert Counter __________________//
public function Store(Request $request)
{
    Counter::create([
        'title' =>$request->title,
        'number' =>$request->number,
    ]);
    return redirect()->back();
}

//_____________ Show Query _______________//
public function index()
{
    $data = Counter::all();
    return view('admin.counter.index',compact('data'));
}

//_____________ Edit Query ________________//
public function edit($id)
{
    //return $id;
    $data = Counter::find($id);
    return view('admin.counter.edit',compact('data'));
}

//______________ Update Query _____________//
public function update(Request $request)
{
    $edit_id = $request->CounEditId;
    Counter::findOrFail($edit_id)->update([
        'title' =>$request->title,
        'number' =>$request->number,
    ]);
    return redirect()->route('counter.index');
}

//_____________ Delete Query________________//
public function Distroy($id)
{
    $data = Counter::find($id)->delete();
    return redirect()->back();
}









}
