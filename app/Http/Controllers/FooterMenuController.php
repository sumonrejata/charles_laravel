<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FooterMenu;
use DB;

class FooterMenuController extends Controller
{
    //________ view footer Menu ________//
    public function create(){
        return view('admin.menu_footer.create');
    }

    //________ Insert footer Menu ________//
    public function store(Request $request){
        FooterMenu::create([
            'menu_name' =>$request->menu_name,
        ]);
        return redirect()->back();
    }

    //________ Show footer Menu ________//
    public function index(){
        $footer_menu = FooterMenu::all();
        return view('admin.menu_footer.index',compact('footer_menu'));
    }

    










}
