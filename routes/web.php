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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/wechat/token', 'Wechat\WechatController@getAccessToken');

Route::get('/wechat/lable', 'Wechat\WechatController@lable');

Route::get('/wechat/crate', 'Crate\CrateController@submit');
Route::get('/wechat/crate', 'Crate\CrateController@submit');
Route::get('/wechat/createmenuaction', 'Crate\CrateController@createmenuaction');


Route::get('/test/aaa', 'Test\TestController@aaa'); //调passport

