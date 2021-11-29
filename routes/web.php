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

    // Route::resource('advertising' ,'App\Http\Controllers\advertisingcontroller')->except("show");
    Route::any('/advertising/add' ,[App\Http\Controllers\advertisingcontroller::class,'add']);
    Route::any('/advertising/edit',[App\Http\Controllers\advertisingcontroller::class,'edit']);
    Route::any('/advertising/new' ,function(){return view('advertising/advertising');});
    Route::any('/advertising/'    ,function(){return view('advertising/advertisinged');});

    Route::any('/users/update',[App\Http\Controllers\userscontrollers::class,'update1']);
    Route::any('/users/edit'  ,[App\Http\Controllers\userscontrollers::class,'edit']);

    Route::any('/titels/edit'  ,[App\Http\Controllers\titelscontrollers::class,'edit']);
    Route::any('/titels/add'  ,[App\Http\Controllers\titelscontrollers::class,'add']);
    Route::any('/titels/'  ,function(){return view('titels/titels');});
    Route::any('/titelsed/'  ,function(){return view('titels/titelsed');});
    
    Route::any('/page/edit'  ,[App\Http\Controllers\sitepagecontroller::class,'edit']);
    Route::any('/page/'  ,function(){return view('/page/pageed');});
    
    Route::any('/price/edit'  ,[App\Http\Controllers\pricecontroller::class,'edit']);
    Route::any('/price/add'  ,[App\Http\Controllers\pricecontroller::class,'add']);
    Route::any('/price/'  ,function(){return view('/price/priceed');});
    Route::any('/price/new'  ,function(){return view('/price/price');});

    Route::any('/advisok'  ,function(){return view('/advertising/advisok');});
    Route::any('/goodsok'  ,function(){return view('/goods/goodsok');});
    Route::any('/userok'  ,function(){return view('/layouts/userok');});
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/shop_end', [App\Http\Controllers\shopcontroller::class, 'shop_end']);
Route::post('/saveorder', [App\Http\Controllers\shopcontroller::class, 'Save']);
Route::get('/saveorder', [App\Http\Controllers\shopcontroller::class, 'load'])->name('loadsshop');
Route::get('/loads_shop' , function () {
    return view('./layouts/shop_list');
})->name('loads_shop');


Route::get('/my_service' , function () {
    return view('./my_service');
});

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