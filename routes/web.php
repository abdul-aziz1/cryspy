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
//     return view('font-end.welcome.index')->name('/');
// });

Route::view('/','font-end.welcome.index')->name('/');

Route::get('/about','AboutController@index')->name('about.index');

Route::get('/service','ServiceController@index')->name('service.index');

Route::get('/gallery','GalleryController@index')->name('gallery.index');

Route::get('/blog','BlogController@index')->name('blog.index');

Route::get('/contact','ContactController@index')->name('contact.index');