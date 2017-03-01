<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home');
});
//Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function(){});


Route::group(['prefix' => 'potato', 'middleware' => 'admin'], function() {
      Route::get('/add', function() {
         return view('backpack::base.addproduct');
      });
      Route::get('/listproduct', 'ListController@index');
      Route::get('/edit', function() {
         return view('backpack::base.editproduct');
      });
});
