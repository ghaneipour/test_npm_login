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

Route::prefix("admin")->group(function(){
    Route::get('/', function () {
        return view('layouts\admin');
    });
    
    Route::resource('category','App\Http\Controllers\categorycontroller')->except("show");
    Route::get('/category/update',[App\Http\Controllers\categorycontroller::class,'update']);
    Route::get('/category/edit',[App\Http\Controllers\categorycontroller::class,'edit']);

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/food', function () {
    return view('./layouts/food');
});

Route::get('/softlock', function () {
    return view('./layouts/softlock');
});
Route::get('/bs', function () {
    return view('./bs');
});