<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('App\Http\Middleware\pedramMidelware')->group( function(){


    Route::group(['prefix'=>'user1'], function(){
        Route::post('/register', 'App\Http\Controllers\UserController@register1');
        Route::post('/login', 'App\Http\Controllers\UserController@login1');
    });
    
    Route::group(['prefix'=>'admin1'], function(){
        Route::post('/register', 'App\Http\Controllers\UserController@register1');
        Route::post('/login', 'App\Http\Controllers\UserController@login1');
    });

});