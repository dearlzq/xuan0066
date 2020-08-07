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

//登陆注册
Route::get('/user/reg','User\IndexController@reg'); //注册
Route::get('/user/login', 'User\IndexController@login');//登陆

Route::get('/goods/index', 'Goods\GoodsController@index');//商品
