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
//     return view('welcome');
//     // return "<h1>Welcome to LARAVEL<h1>";
// });

//routing to about page created 
// Route::get('/about', function () {
//     return view('pages.about');
// });
//passing values in URL 
// Route::get('/users/{id}/{name}', function ($id,$name) {
//     return $name." user id is: ".$id;
// });

Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');

Route::resource('posts','PostsController');
