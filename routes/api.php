<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace'=>'api'],function () {
    Route::group(['prefix' => 'user'], function () {
        Route::group(['namespace' => 'User'], function () {

            Route::post('register', 'RegisterController@register');
            Route::post('login', 'LoginController@login');

                });
            });
    Route::group(['prefix' => 'threads'],function (){
        Route::get('/','ThreadController@index');
        Route::post('/','ThreadController@show');

    });

        });

Route::group(['namespace' => 'api','middleware'=> 'auth:api'],function (){
    Route::group(['prefix' => 'threads'],function (){
        Route::post('create','ThreadController@create');
        Route::post('remove','ThreadController@destroy');
        Route::post('{thread}/add_reply','ReplyController@store');
    });
});

