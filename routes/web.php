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


//dynamic route
// Route::get('/about/{id}/{name}', function ($id ,$name) {
//     return 'This is an ID '. $id . ' name is ' . $name;
// });

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/about', function () {
//     return view('pages.about');
// });

Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');

Route::resource('posts','PostsController');
Auth::routes();
Route::get('/Dashboard', 'DashboardController@index');
