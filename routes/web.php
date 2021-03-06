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
    return view('welcome');
});
Route::get('/language/{lang}', function ($lang) {
    // dd(auth()->user());
    // dd(User::find(1));
    //
    $cookie = cookie('applocale', $lang, 2628000);
    return redirect()->back()->cookie($cookie);

    // return view('welcome');
});

Route::get('welcome/{locale}', function ($locale) {

    App::setLocale($locale);
    return $locale = App::getLocale();

    //
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



Auth::routes(['verify' => true]);

Route::middleware(['verified', 'auth'])->group(function(){



    Route::middleware(['role:admin'])->group(function(){
        Route::get('/post', 'PostController@index');
    });

    Route::get('post/create', 'PostController@create')->middleware('active');


    Route::post('/post', 'PostController@store');
    Route::get('post/{id}', 'PostController@show');

});
    Route::get('/home', 'HomeController@index')->name('home');
