<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use DB;
use App\Models\User;


class PostController extends Controller
{
    //_____________ view Post _____________//
    public function create()
    {
        $category = Category::all();
        $tags = Tag::all();
        return view('admin.post.create',compact('category','tags'));
    }

    //_____________ Insert Post _____________//
    public function store(Request $request)
    {
        //dd($request->all());
        //return $request->post_title;
        $image = $request->file('image');
        $save_url = time() . '.' .$image->getClientOriginalextension();
        $image->move(public_path('images/'),$save_url); 
        $img_url = 'images/'.$save_url;
        $post = Post::create([
              'title'=>$request->post_title,
              'desc' =>$request->desc,
              'category_id' =>$request->category_id,
              'user_id' =>auth()->user()->id,
              'image' =>$img_url,
          ]);
          $post->tags()->attach($request->tags);
          return back();
    }

    //___________ Show Post ______________//
    public function index()
    {
        $data = Post::all();
        return view('admin.post.index',compact('data'));
    }

    
    



















}
