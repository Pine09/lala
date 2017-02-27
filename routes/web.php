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
    return view('layouts.content');
});
//Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function(){});

Route::get('/potato/add', function() {
   return view('backpack::base.add');
});
