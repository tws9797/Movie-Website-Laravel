<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

*/
Route::get('/','MovieController@index');

Route::get('/alpha','MovieController@sortByAlpha')->name('sortByAlpha');

Route::get('/year','MovieController@sortByYear')->name('sortByYear');

//Route::get('/{genre}','MovieController@sortByGenre')->name('sortByGenre');

Route::resource('/movie','MovieController');

Route::get('/about',function(){
  return view('about');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
