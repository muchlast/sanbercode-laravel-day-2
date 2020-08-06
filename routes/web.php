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

// Route::get('/', 'HomeController@home');

// Route::get('/register', 'AuthController@register');

// Route::post('/selamat', 'AuthController@selamat');

Route::get('/master', function() {
    return view('adminlte.master');
});

Route::get('/', function (){
    return view ('items.index');
});

Route::get('/data-table', function (){
    return view('items.data-table');
});