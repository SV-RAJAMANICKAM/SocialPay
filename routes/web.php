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
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/login/custome', [
    'uses' => 'LoginController@login',
    'as' => 'login.custome'
]);

Route::group(['middleware' => ['auth', 'verified']], function () {

    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

	Route::get('/admin_dashboard', function(){
        return view('admin.pages.dashboard');
    })->name('admin_dashboard');

});

Route::view('user_login','admin.pages.login');
Route::view('user_register','admin.pages.register');
Route::view('user_email','admin.pages.email');
Route::view('user_reset','admin.pages.reset');

Route::view('eb_form','admin.pages.ebform');

