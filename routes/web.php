<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/debug', function () {
    return phpinfo();
});

Route::get('/', function () {
    return view('welcome');
});

Route::any('shop', function () {
    return view('layouts\shop');
});

Route::prefix("admin")->group(function(){
    Route::get('/', function () {
        return view('layouts\admin');
    });
    
    Route::resource('category','App\Http\Controllers\categorycontroller')->except("show");
    Route::any('/category/update',[App\Http\Controllers\categorycontroller::class,'update']);
    Route::any('/category/edit',[App\Http\Controllers\categorycontroller::class,'edit']);

    Route::resource('customers','App\Http\Controllers\customerscontroller')->except("show");
    Route::any('/customers/update',[App\Http\Controllers\customerscontroller::class,'update1']);
    Route::any('/customers/edit',[App\Http\Controllers\customerscontroller::class,'edit']);

    Route::resource('goods','App\Http\Controllers\goodscontroller')->except("show");
    Route::any('/goods/update',[App\Http\Controllers\goodscontroller::class,'update1']);
    Route::any('/goods/edit',[App\Http\Controllers\goodscontroller::class,'edit']);

    Route::any('/users/update',[App\Http\Controllers\userscontrollers::class,'update1']);
    Route::any('/users/edit'  ,[App\Http\Controllers\userscontrollers::class,'edit']);
 
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/saveorder', [App\Http\Controllers\shopcontroller::class, 'Save']);
Route::get('/saveorder', [App\Http\Controllers\shopcontroller::class, 'load'])->name('loadsshop');

Route::post('/savepage', [App\Http\Controllers\sitepagecontroller::class, 'Save']);
Route::get('/savepage', [App\Http\Controllers\sitepagecontroller::class, 'load'])->name('loadspage');


Route::get('/food', function () {
    return view('./layouts/food');
});

Route::get('/softlock', function () {
    return view('./layouts/softlock');
});
Route::get('/bs', function () {
    return view('./bs');
});