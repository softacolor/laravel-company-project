<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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
    return view('index');
})->name('softacolor');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('backend.index');
})->name('dashboard');

Route::get('/user/logout', [AdminController::class,'logout'])->name('user.logout');
Route::get('/about-us', [FrontendController::class,'about'])->name('about');
Route::get('/contact-us', [FrontendController::class,'contact'])->name('contact');
Route::get('/blog', [FrontendController::class,'blog'])->name('blog');

// Service route

Route::get('/our-services', [FrontendController::class,'services'])->name('services');
Route::get('/seo-services', [FrontendController::class,'seo'])->name('seo');
Route::get('/social-media-marketing', [FrontendController::class,'smm'])->name('smm');
Route::get('/email-marketing', [FrontendController::class,'email'])->name('email');
Route::get('/web-design-and-development', [FrontendController::class,'web'])->name('webdesign');
Route::get('/youtube-marketing', [FrontendController::class,'youtube'])->name('youtube');
Route::get('/lead-generation', [FrontendController::class,'leadgen'])->name('leadgen');

// category and post

Route::get('/categories', [AdminController::class,'category'])->name('categories');
Route::get('/add-categories', [AdminController::class,'addcategory'])->name('add_cat');
Route::post('/store-categories', [AdminController::class,'storecategory'])->name('store_cat');
Route::get('/edit-categories/{id}', [AdminController::class,'editcategory'])->name('edit_cat');
Route::post('/update-categories/{id}', [AdminController::class,'updatecategory'])->name('update_cat');
Route::get('/delete-categories/{id}', [AdminController::class,'deletecategory'])->name('delete_cat');

// User Contact Massege

Route::get('/user-contact-massege', [AdminController::class,'contact_massege'])->name('contact_massege');
Route::post('/store-contact', [AdminController::class,'storecontact'])->name('contact_massege_store');

Route::get('/delete-massege/{id}', [AdminController::class,'deletemassege'])->name('delete_massege');

// User Subscribe

Route::post('/store-subscriber', [AdminController::class,'storesub'])->name('sub_store');
Route::get('/subscriber', [AdminController::class,'subscriber'])->name('subscriber');
Route::get('/delete-subscriber/{id}', [AdminController::class,'deletesubscriber'])->name('delete_subscriber');


// Setting

Route::get('/all-setting', [AdminController::class,'allsetting'])->name('allsetting');
Route::get('/add-setting', [AdminController::class,'addsetting'])->name('add_setting');
Route::post('/store-setting', [AdminController::class,'storesetting'])->name('store_setting');

Route::get('/edit-setting/{id}', [AdminController::class,'editsetting'])->name('edit_setting');
Route::post('/update-setting/{id}', [AdminController::class,'updatesetting'])->name('update_setting');

// Post

Route::get('/all-post', [AdminController::class,'allpost'])->name('allpost');
Route::get('/add-post', [AdminController::class,'addpost'])->name('create_post');
Route::post('/store-post', [AdminController::class,'storepost'])->name('store_post');
Route::get('/edit-post/{id}', [AdminController::class,'editpost'])->name('edit_post');
Route::post('/update-post/{id}', [AdminController::class,'updatepost'])->name('update_post');
Route::get('/delete-post/{id}', [AdminController::class,'deletepost'])->name('delete_post');





