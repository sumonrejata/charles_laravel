<?php

use Illuminate\Support\Facades\Route;
use illuminate\Support\Facades\Auth;
use App\Http\Controllers\FeatursController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AboutSubController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\OurTeamController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\OurPartnerController;
use App\Http\Controllers\FreeConsulatationController;
use App\Http\Controllers\HeaderLogoController;
use App\Http\Controllers\HeaderAddressController;
use App\Http\Controllers\MenuHeaderController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\HeaderIconController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\FooterMenuController;

use App\Http\Controllers\FrontendController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//______Featurs Controller_________//
Route::get('feature/create',[FeatursController::class,'Create'])->name('feature.create');
Route::post('feature/store',[FeatursController::class,'Store'])->name('feature.store');
Route::get('feature/index',[FeatursController::class,'index'])->name('feature.index');
Route::get('feature/edit/{id}',[FeatursController::class,'Edit'])->name('feature.edit');
Route::post('feature/update',[FeatursController::class,'Update'])->name('feature.update');
Route::get('feature/delete/{id}',[FeatursController::class,'Distroy'])->name('feature.delete');

//___________About Route_____________//
Route::get('about/create',[AboutController::class,'Create'])->name('about.create');
Route::post('about/store',[AboutController::class,'Store'])->name('about.store');
Route::get('about/index',[AboutController::class,'index'])->name('about.index');
Route::get('about/edit/{id}',[AboutController::class,'Edit'])->name('about.edit');
Route::post('about/update',[AboutController::class,'Update'])->name('about.update');
Route::get('about/delete/{id}',[AboutController::class,'Distroy'])->name('about.delete');

//___________About Sub Route______________//
Route::get('aboutsub/create',[AboutSubController::class,'Create'])->name('aboutsub.create');
Route::post('aboutsub/store',[AboutSubController::class,'Store'])->name('aboutsub.store');
Route::get('aboutsub/index',[AboutSubController::class,'index'])->name('aboutsub.index');
Route::get('aboutsub/edit/{id}',[AboutSubController::class,'Edit'])->name('aboutsub.edit');
Route::post('aboutsub/update',[AboutSubController::class,'Update'])->name('aboutsub.update');

//______________Service Route________________//
Route::get('service/create',[ServiceController::class,'Create'])->name('service.create');
Route::post('service/store',[ServiceController::class,'Store'])->name('service.store');
Route::get('service/index',[ServiceController::class,'index'])->name('service.index');
Route::get('service/edit/{id}',[ServiceController::class,'Edit'])->name('service.edit');
Route::post('service/update',[ServiceController::class,'Update'])->name('service.update');
Route::get('service/delete/{id}',[ServiceController::class,'Distroy'])->name('service.delete');

//________________Testimonial Route____________________//
Route::get('testimonial/create',[TestimonialController::class,'Create'])->name('testimonial.create');
Route::post('testimonial/store',[TestimonialController::class,'Store'])->name('testimonial.store');
Route::get('testimonial/index',[TestimonialController::class,'index'])->name('testimonial.index');
Route::get('testimonial/edit/{id}',[TestimonialController::class,'Edit'])->name('testimonial.edit');
Route::post('testimonial/update',[TestimonialController::class,'Update'])->name('testimonial.update');
Route::get('testimonial/delete/{id}',[TestimonialController::class,'Distroy'])->name('testimonial.delete');

//_________________ Our Team Route _____________________//
Route::get('ourteam/create',[OurTeamController::class,'Create'])->name('ourteam.create');
Route::post('ourteam/store',[OurTeamController::class,'Store'])->name('ourteam.store');
Route::get('ourteam/index',[OurTeamController::class,'index'])->name('ourteam.index');
Route::get('ourteam/edit/{id}',[OurTeamController::class,'Edit'])->name('ourteam.edit');
Route::post('ourteam/update',[OurTeamController::class,'Update'])->name('ourteam.update');
Route::get('ourteam/delete/{id}',[OurTeamController::class,'Distroy'])->name('ourteam.delete');

//____________________ Counter Route ______________________//
Route::get('counter/create',[CounterController::class,'Create'])->name('counter.create');
Route::post('counter/store',[CounterController::class,'Store'])->name('counter.store');
Route::get('counter/index',[CounterController::class,'index'])->name('counter.index');
Route::get('counter/edit/{id}',[CounterController::class,'edit'])->name('counter.edit');
Route::post('counter/update',[CounterController::class,'update'])->name('counter.update');
Route::get('counter/delete/{id}',[CounterController::class,'Distroy'])->name('counter.delete');

//_____________________ Our Partner Route______________________//
Route::get('partner/create',[OurPartnerController::class,'Create'])->name('partner.create');
Route::post('partner/store',[OurPartnerController::class,'store'])->name('partner.store');
Route::get('partner/index',[OurPartnerController::class,'index'])->name('partner.index');
Route::get('partner/edit/{id}',[OurPartnerController::class,'edit'])->name('partner.edit');
Route::post('partner/update',[OurPartnerController::class,'update'])->name('partner.update');
Route::get('partner/delete/{id}',[OurPartnerController::class,'Distroy'])->name('partner.delete');

//__________________ Free Consulation___________________//
Route::get('consulation/create',[FreeConsulatationController::class,'create'])->name('consulation.create');
Route::get('consulation/index',[FreeConsulatationController::class,'index'])->name('consulation.index');
Route::get('consulation/delete/{id}',[FreeConsulatationController::class,'Distroy'])->name('consulation.delete');

//_________________ Header Logo __________________//
Route::get('headerlogo/create',[HeaderLogoController::class,'create'])->name('headerlogo.create');
Route::post('headerlogo/store',[HeaderLogoController::class,'store'])->name('headerlogo.store');
Route::get('headerlogo/index',[HeaderLogoController::class,'index'])->name('headerlogo.index');
Route::get('headerlogo/edit/{id}',[HeaderLogoController::class,'edit'])->name('headerlogo.edit');
Route::post('headerlogo/update',[HeaderLogoController::class,'update'])->name('headerlogo.update');
Route::get('headerlogo/delete/{id}',[HeaderLogoController::class,'Distroy'])->name('headerlogo.delete');

//_________________ Header Address Route __________________//
Route::get('headeraddress/create',[HeaderAddressController::class,'create'])->name('headeraddress.create');
Route::post('headeraddress/store',[HeaderAddressController::class,'store'])->name('headeraddress.store');
Route::get('headeraddress/index',[HeaderAddressController::class,'index'])->name('headeraddress.index');
Route::get('headeraddress/edit/{id}',[HeaderAddressController::class,'edit'])->name('headeraddress.edit');
Route::post('headeraddress/update',[HeaderAddressController::class,'update'])->name('headeraddress.update');
Route::get('headeraddress/delete/{id}',[HeaderAddressController::class,'Distroy'])->name('headeraddress.delete');


//_________________ Header Menu Route __________________//
Route::get('menu/create',[MenuHeaderController::class,'create'])->name('menu.create');
Route::post('menu/store',[MenuHeaderController::class,'store'])->name('menu.store');
Route::get('menu/index',[MenuHeaderController::class,'index'])->name('menu.index');
Route::get('menu/edit/{id}',[MenuHeaderController::class,'edit'])->name('menu.edit');
Route::post('menu/update',[MenuHeaderController::class,'update'])->name('menu.update');
Route::get('menu/delete/{id}',[MenuHeaderController::class,'Distroy'])->name('menu.delete');

//_________________ Header Menu Route __________________//
Route::get('headericon/create',[HeaderIconController::class,'create'])->name('headericon.create');
Route::post('headericon/store',[HeaderIconController::class,'store'])->name('headericon.store');
Route::get('headericon/index',[HeaderIconController::class,'index'])->name('headericon.index');
Route::get('headericon/edit/{id}',[HeaderIconController::class,'edit'])->name('headericon.edit');
Route::post('headericon/update',[HeaderIconController::class,'update'])->name('headericon.update');
Route::get('headericon/delete/{id}',[HeaderIconController::class,'Distroy'])->name('headericon.delete');


//_________________ Slider Route ___________________//
Route::get('slider/create',[PostController::class,'create'])->name('slider.create');
Route::post('slider/store',[PostController::class,'store'])->name('slider.store');
Route::get('slider/index',[PostController::class,'index'])->name('slider.index');

//_______________ Post Route _______________//
Route::get('post/create',[PostController::class,'create'])->name('post.create');
Route::post('post/store',[PostController::class,'store'])->name('post.store');
Route::get('post/index',[PostController::class,'index'])->name('post.index');

//_______________ Category Route _______________//
Route::get('category/create',[CategoryController::class,'create'])->name('category.create');
Route::post('category/store',[CategoryController::class,'store'])->name('category.store');
Route::get('category/index',[CategoryController::class,'index'])->name('category.index');
Route::get('category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::post('category/update',[CategoryController::class,'update'])->name('category.update');
Route::get('category/delete/{id}',[CategoryController::class,'Distroy'])->name('category.delete');


//_______________ Tag Route _______________//
Route::get('tag/create',[TagController::class,'create'])->name('tag.create');
Route::post('tag/store',[TagController::class,'store'])->name('tag.store');
Route::get('tag/index',[TagController::class,'index'])->name('tag.index');
Route::get('tag/edit/{id}',[TagController::class,'edit'])->name('tag.edit');
Route::post('tag/update',[TagController::class,'update'])->name('tag.update');
Route::get('tag/delete/{id}',[TagController::class,'Distroy'])->name('tag.delete');


//_______________ Portfolio Route _______________//
Route::get('portfolio/create',[PortfolioController::class,'create'])->name('portfolio.create');
Route::post('portfolio/store',[PortfolioController::class,'store'])->name('portfolio.store');
Route::get('portfolio/index',[PortfolioController::class,'index'])->name('portfolio.index');
Route::get('portfolio/edit/{id}',[PortfolioController::class,'edit'])->name('portfolio.edit');
Route::post('portfolio/update',[PortfolioController::class,'update'])->name('portfolio.update');
Route::get('portfolio/delete/{id}',[PortfolioController::class,'Distroy'])->name('portfolio.delete');

//_________ Contact Route _________//
Route::get('contact/create',[ContactUsController::class,'create'])->name('contact.create');
Route::post('contact/store',[ContactUsController::class,'store'])->name('contact.store');
Route::get('contact/index',[ContactUsController::class,'index'])->name('contact.index');

//________ Footer Menu Route ___________//
Route::get('footermenu/create',[FooterMenuController::class,'create'])->name('footermenu.create');
Route::post('footermenu/store',[FooterMenuController::class,'store'])->name('footermenu.store');
Route::get('footermenu/index',[FooterMenuController::class,'index'])->name('footermenu.index');


//_______ Frontend Route  _________//
Route::get('website/test',[FrontendController::class,'index'])->name('website.index');
Route::get('website/mainhome',[FrontendController::class,'mainhome'])->name('website.mainhome');
Route::get('website/blogtff',[FrontendController::class,'blogt'])->name('website.blogt');
Route::get('website/footer',[FrontendController::class,'footer'])->name('website.footer');

//_______ Frontend Related Post Route  _________//
Route::get('website/blogdetails/{id}',[FrontendController::class,'Blogdetails'])->name('website.blogdetails');









