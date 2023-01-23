<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;
use DB;

class ContactUsController extends Controller
{
    //_________ view contact ___________//
    public function create()
    {
        return view('admin.contact.create');
    }

    //_________ Insert contact ___________//
    public function store(Request $request)
    {
        ContactUs::create([
            'name' =>$request->name,
            'phone' =>$request->phone,
            'email' =>$request->email,
            'website' =>$request->website,
            'message' =>$request->message,
        ]);
        return redirect()->back();
    }

    //_________ Show contact ___________//
    public function index()
    {
        $data = ContactUs::all();
        return view('admin.contact.index',compact('data'));
    }












}
