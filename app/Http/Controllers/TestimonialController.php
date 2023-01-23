<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use DB;

class TestimonialController extends Controller
{
    //___________View Testimonial______________//
    public function Create()
    {
        return view('admin.testimonial.create');
    }

    //___________Insert Testimonial__________//
    public function Store(Request $request)
    {
        Testimonial::create([
            'name'  =>$request->name,
            'desig'  =>$request->desig,
            'desc'  =>$request->desc,
        ]);
        return redirect()->route('testimonial.create');
    }

    //______________Show Testimonial_____________//
    public function index()
    {
        $testimonial = Testimonial::all();
        return view('admin.testimonial.index',compact('testimonial'));
    }

    //___________ Edit Testimonial ___________//
    public function Edit($id)
    {
        //return $id;
        //$data = DB::table('testimonials')->where('id',$id)->first();
        $data = Testimonial::find($id);
        return view('admin.testimonial.edit',compact('data'));
    }

    //___________ Update Testimonial _____________//
    public function Update(Request $request)
    {
        $edit_id = $request->TesEditId;
        Testimonial::findOrFail($edit_id)->update([
            'name' =>$request->name,
            'desig' =>$request->desig,
            'desc' =>$request->desc,
        ]);
        return redirect()->route('testimonial.index');
    }

    //____________Delete Query______________//
    public function Distroy($id)
    {
        //DB::table('testimonials')->where('id',$id)->delete();
        $data = Testimonial::find($id)->delete();
        //$data->delete();
        return redirect()->back();
    }





















}
