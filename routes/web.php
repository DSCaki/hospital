<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;


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


Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect'])->middleware('auth', 'verified');

Route::get('/about',[HomeController::class,'about']);

Route::get('/team',[HomeController::class,'team']);

Route::get('/blog',[HomeController::class,'blog']);

Route::get('/blogdetails/{id}',[HomeController::class,'blogdetails']);

Route::get('/contact',[HomeController::class,'contact']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



Route::get('/add_doctor_view',[AdminController::class,'addview']);

Route::post('/upload_doctor',[AdminController::class,'upload']);

Route::post('/appointment',[HomeController::class,'appointment']);

Route::get('/myappointment',[HomeController::class,'myappointment']);

Route::get('/cancle_appoint/{id}',[HomeController::class,'cancle_appoint']);

Route::get('/showappointment',[AdminController::class,'showappointment']);

Route::get('/approved/{id}',[AdminController::class,'approved']);

Route::get('/canceled/{id}',[AdminController::class,'canceled']);

Route::get('/showdoctor',[AdminController::class,'showdoctor']);

Route::get('/deletedoctor/{id}',[AdminController::class,'deletedoctor']);

Route::get('/updatedoctor/{id}',[AdminController::class,'updatedoctor']);

Route::post('/editedoctor/{id}',[AdminController::class,'editedoctor']);

Route::get('/emailview/{id}',[AdminController::class,'emailview']);

Route::post('/sendemail/{id}',[AdminController::class,'sendemail']);

Route::get('/addblog',[AdminController::class,'addblog']);

Route::post('/upload_blog',[AdminController::class,'upload_blog']);

Route::get('/showblog',[AdminController::class,'showblog']);

Route::get('/deleteblog/{id}',[AdminController::class,'deleteblog']);

Route::get('/updateblog/{id}',[AdminController::class,'updateblog']);

Route::post('/editeblog/{id}',[AdminController::class,'editeblog']);
