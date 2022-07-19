<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', 'LoginController@index');
Route::post('/login', 'LoginController@login')->middleware(['throttle:login']);

Route::get('/forgot', 'LoginController@showForgotPassword');
Route::get('/reset', 'LoginController@showResetPassword');

Route::get('/register', 'LoginController@showRegister');

//Route::get('/home', 'LoggedInController@home')->name('home');
Route::get('/logout', 'LoggedInController@logout');

Route::get('/base', function () {
    return view('school/baseline');
});
Route::get('/report', function () {
    return view('school/report');
});
Route::get('/details', function () {
    return view('school/details');
});
Route::get('/classes', function () {
    return view('school/classes');
});
Route::get('/holidays', function () {
    return view('school/holidays');
});
Route::get('/home', function () {
    return view('home');
});


Route::group([
    'middleware' => ['auth'],
], function () {
    //
});
