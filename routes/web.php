<?php

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
    return view('welcome');
});

#Route::get('index',function (){ return view('admin.index');});

Route::get('/index','Admin\IndexController@showIndex');

//老式写法
//Route::group(['prefix'=>'front','namespace'=>'Front'],function (){
//
//});

Route::namespace('Front')->prefix('front')->group(function (){
    Route::get('index','IndexController@indexShow')->name('front.index');
    Route::get('test','IndexController@showAllMou')->name('front.test');
    Route::get('listpost','ListpostController@showPost')->name('front.listpost');
    Route::get('login','LoginController@login')->name('front.login');
    Route::post('login','LoginController@userDeal')->name('front.login');
    Route::get('public','PublicController@show')->name('front.public');
    Route::post('public','PublicController@add')->name('front.public');
});
