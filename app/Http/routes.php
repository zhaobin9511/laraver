<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome')->with('name','Laravel');
});

Route::get('/about', 'AboutController@index');

Route::get('/test', 'TestController@index');


Route::get('/sphinx', 'SphinxController@sphinx');
Route::get('/sphinx/search', 'SphinxController@sphinxSearch');


Route::get('/data', 'SphinxController@data');
