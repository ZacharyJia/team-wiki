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

use Illuminate\Http\Request;

Route::get('/', function (Request $request) {
//    return view('home');

    ($user = Adldap::search()->users()->find('jiazequn'));

    dd(Adldap::auth()->attempt($user->dn, 'jiazequn'));

});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/space', 'SpaceController@get')->name('space_list');
Route::post('/space/create', 'SpaceController@create');
Route::get('/new/space', 'SpaceController@show_new')->name('new_space');
