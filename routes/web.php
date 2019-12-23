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

//Route::get('/', function () {
//    return view('welcome');
//});
//测试项目 -------------s
Route::get('/','BookController@bookList')->name('booklist');
Route::get('book/create', 'BookController@bookAdd')->name('addbook');
Route::get('/digest/{id}','DigestController@digestList')->name('list');
Route::get('/digest/edit/{id?}','DigestController@digestEdit')->name('digest_edit');
Route::get('/digest/add/{id?}','DigestController@digestAdd')->name('digest_add');
