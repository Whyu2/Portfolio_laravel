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

// Route::get('/', function () {
//     return view('portfolio.index');
// });

//pindah_halaman
Route::get('/', 'PagesController@home');
Route::get('/admin', 'AdminController@home');
Route::get('/admin/profile', 'ProfileController@index');
Route::put('/admin/profile/{profile}', 'ProfileController@update');
Route::get('/admin/about', 'AboutController@index');
Route::get('/admin/projek', 'Projekkontroller@index');
Route::get('/admin/inbox', 'InboxController@index');

//edit
Route::put('/admin/about/{about}', 'AboutController@update');
Route::put('/admin/projek/{projek}', 'Projekkontroller@update');

//tambah
Route::put('/admin/inbox/', 'InboxController@store');
