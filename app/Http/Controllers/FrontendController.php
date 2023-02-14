<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\HeaderLogo;
use App\Models\HeaderAddress;
use App\Models\Featurs;
use App\Models\About;
use App\Models\AboutSub;
use App\Models\Testimonial;
use App\Models\OurTeam;
use App\Models\Counter;
use App\Models\OurPartner;
use App\Models\Slider;
use App\Models\MenuHeader;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\FooterMenu;
use Carbon\Carbon;
use DB;


class FrontendController extends Controller
{
  public function index()
  {
    $logo = HeaderLogo::all();
    $featurs = Featurs::all();
    $services = Service::all();
    $head_address = HeaderAddress::all();
    $about = About::all();
    $about_sub = AboutSub::all();
    $testimonial = Testimonial::all();
    $our_team = OurTeam::all();
    $counter = Counter::all();
    $OurPartners = OurPartner::all();
    $slider = Slider::all();
    $menu = MenuHeader::all();
    $footer_menu = FooterMenu::all();


    return view('frontend.index',compact('services','logo','head_address','featurs','about','about_sub','testimonial','our_team','counter','OurPartners','slider','menu','footer_menu'));
  } 
  
  //_______ Blog section Start __________//
  public function blogt(){
    $logo = HeaderLogo::all();
    $head_address = HeaderAddress::all();
    $menu = MenuHeader::all();
    //$post = Post::latest()->take(2)->get();
    $post = DB::table('posts')->simplePaginate(2);
    $recent_post = Post::latest()->take(2)->get();
    $category = Category::all();
    $tags = Tag::all();
    $footer_menu = FooterMenu::all();
    
 
    return view('frontend.blog',compact('logo','head_address','menu','post','category','tags','recent_post','footer_menu'));
  }
  
  //_________ Footer section Start __________//
  // public function footer(){
  //   $footer_menu = FooterMenu::all();
  //   return view('frontend.index',compact('footer_menu'));
  // }


  // public function mainhome(){
  //   $logo = HeaderLogo::all();
  //   $head_address = HeaderAddress::all();
  //   $menu = MenuHeader::all();
  //   $slider = Slider::all();
  //   return view('frontend.home',compact('logo','head_address','menu','slider'));
  // }

  public function mainhome()
  {
    $logo = HeaderLogo::all();
    $featurs = Featurs::all();
    $services = Service::all();
    $head_address = HeaderAddress::all();
    $about = About::all();
    $about_sub = AboutSub::all();
    $testimonial = Testimonial::all();
    $our_team = OurTeam::all();
    $counter = Counter::all();
    $OurPartners = OurPartner::all();
    $slider = Slider::all();
    $menu = MenuHeader::all();
    $footer_menu = FooterMenu::all();
    $recent_post = Post::latest()->take(2)->get();


    return view('frontend.index',compact('services','logo','head_address','featurs','about','about_sub','testimonial','our_team','counter','OurPartners','slider','menu','footer_menu','recent_post'));
  }

  //__________ Blog Details __________//
  public function Blogdetails($id)
  {
    $logo = HeaderLogo::all();
    $head_address = HeaderAddress::all();
    $menu = MenuHeader::all();
    $footer_menu = FooterMenu::all();
    $recent_post = Post::latest()->take(2)->get();
    //$related_post = Category::with('posts')->get();
    $related_post = Post::where('category_id',"!=",$id)->get();
    return $related_post;
    
    return view('frontend.blogdetails',compact('logo','head_address','menu','footer_menu','recent_post','related_post'));
  }


















}
