<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within cay-trong group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('TrangChu.view-trang-chu');
});

Route::group(['prefix' => 'nguoi-dung'], function (){
    Route::get('/', 'NguoiDungController@getViewDanhSach');
    Route::get('/them', 'NguoiDungController@getViewThem');
    Route::post('/_postthem', 'SendMailController@sendMail');
});

Route::group(['prefix' => 'cay-trong'], function (){
    Route::get('/', 'CayTrongController@getViewDanhSach');
    Route::get('/them', 'CayTrongController@getViewThem');
});


Route::get('/thiet-bi-cam-bien', function () {
    return view('cam-bien.view-cam-bien');
});

Route::get('/bai-viet', function () {
    return view('bai-viet.view-bai-viet');
});

Route::get('/menu', function () {
    return view('menu.view-menu');
});


