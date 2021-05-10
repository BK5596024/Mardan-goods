<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Laravel; 
use App\Http\Controllers\FYP; 
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

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('', function () {
    return view('index');
});
Route::view('index','index');


Route::get('admin/index',[FYP::class,'dashboard']);
Route::get('admin/check',[FYP::class,'check']);


//Route::get('laravel','Laravel@show');//this is valid for laravel 6
Route::get('show',[Laravel::class,'ShowMethod']);//Laravel is controller & showMethod
Route::get('show/{id}',[Laravel::class,'ShowMethodID']);//Laravel is controller & showMethodID

//Route::get('user/{id}',[Laravel::class,'laodview']);//Laravel is controller & 
//Route::view('log','form');

Route::post('locaton',[Laravel::class,'location']);//Laravel is controller & 
Route::post('type',[Laravel::class,'type']);//Laravel is controller & 
Route::post('calprice',[Laravel::class,'calculateprice']);//Laravel is controller & 
Route::post('verify',[Laravel::class,'verify']);//Laravel is controller & 
Route::post('client/signup',[Laravel::class,'RegisterClient']);//Laravel is controller & 
Route::post('client/login',[Laravel::class,'Login']);//Laravel is controller & 
Route::post('index',[Laravel::class,'index']);//Laravel is controller & 


Route::view('about','about');
Route::view('contact','contact');
Route::view('login','login');
Route::view('signup','signup');

Route::view('layout','layout');
Route::view('detail','detail');
Route::view('display','display');
Route::view('confirm','confirm');
//Route::view('map','map');

Route::view('booking','service');

Route::view('welcomes','welcomes');
Route::post('getMiles',[Laravel::class,'miles']);//Laravel is controller & 