<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Session;

Route::get('/logout',function(){
    Session::forget('user');
    return redirect('login');
});

Route::view('/login','login');
Route::post('/login',[UserController::class,'login']);

Route::get("/",[ProductController::class,'index']);
Route::get("detail/{id}",[ProductController::class,'detail']);
Route::get("search",[ProductController::class,'search']);
// Route::any("add_to_cart",[ProductController::class,'add_to_cart']);
Route::post("addToCart", [ProductController::class, 'addToCart']);
Route::get('cart', [UserController::class, 'showCart']);  // Adjust the route and method names as needed
Route::get('cartlist',[ProductController::class,'cartlist']);
Route::get('removecart/{id}',[ProductController::class,'removeCart']);
Route::get('ordernow',[ProductController::class,'orderNow']);
Route::post('orderplace',[ProductController::class,'orderPlace']);
Route::get('myorder',[ProductController::class,'myOrder']);
Route::post('register',[UserController::class,'register']);
Route::view('register','register');


