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
use App\User;
Route::get('/', function () {
    // dd(auth()->user());
    // dd(User::find(1));

    return view('welcome');
});

Route::get('/login/{id}', function($id){
    //create a session, to authenticate a user
    auth()->loginUsingId($id);
    return back();
});

Route::get('/logout', function(){
    auth()->logout();
    return back();
});

Route::get('/post', 'PostController@index');

Route::get('/post/create', 'PostController@create');
Route::post('/post', 'PostController@store');
