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

Route::get('/', function () {
    return view('welcome') ;
});
Route::get('/test1/{id}', function () {
    return  'esraa';
})->name("a");

Route::namespace('Front')->group(function(){
    route::get('users','UserController@UserName');
    route:: get('index','UserController@getindex');


});
 
// Route::resource('news','NewsController' );
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
    
 
Route::get('/dashboard', function () {
    return view('dashboard') ;
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
