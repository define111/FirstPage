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
    return view('home');
});

Route::get('/art1', function () {
    return view('art1');
});

Route::get('/coming', function () {
    return view('coming');
});

Route::get('/tests', function () {
    return view('tests');
});

Route::get('/cooperini', function () {
    return view('cooperini');
});

Route::get('/cv', function () {
    return view('cv');
});

Route::get('/jobswap', function () {
    return view('jobswap');
});

Route::get('/write', function () {
    return view('write');
});

Route::get('/impressum', function () {
    return view('impressum');
});

Route::get('/datenschutzerklaerung', function () {
    return view('datenschutz');
});


Route::get('/contact', 'ContactFormController@create');
Route::post('/contact', 'ContactFormController@store');
