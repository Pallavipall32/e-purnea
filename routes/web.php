<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\{Homecontroller,BusinessController,AuthController};


Route::get("/",[Homecontroller::class,"homepage"])->name("homepage");
Route::get("/Account",[Homecontroller::class,"Account"])->name("Account");
Route::get("/add-business",[Homecontroller::class,"business"])->name("business");
Route::get("/category/{cat_id?}",[Homecontroller::class,"category"])->name("category");
Route::get("/view/{id}",[HomeController::class,"viewBiz"])->name("viewBiz");
Route::get("/search",[HomeController::class,"search"])->name("search");

Route::resource('business',BusinessController::class);

 Route::middleware('auth')->group(function (){
    Route::get("/add-business",[Homecontroller::class,"business"])->name("business");
 });
//authcontroller route
Route::controller(AuthController::class)->group (function () {
    Route::match(['get', 'post'],'/login','login')->name("login");
    Route::match(['get', 'post'],'/register','register')->name("register");
    Route::get('/logout','logout')->name("logout");

});