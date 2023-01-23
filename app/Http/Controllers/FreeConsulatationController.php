<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FreeConsulatation;
use DB;

class FreeConsulatationController extends Controller
{
    //_____________ View Cunsulation________________//
    public function create()
    {
        return view('admin.consulation.create');
    }

    //______________ Show Consulation _______________//
    public function index(Request $request)
    {
        $data = FreeConsulatation::all();
        return view('admin.consulation.index',compact('data'));
    }

    //_______________ Delete Consulation ________________//
    public function Distroy($id)
    {
        $data = FreeConsulatation::find($id)->delete();
        return redirect()->back();
    }














}
