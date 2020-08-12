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

// Route::get('/master', function() {
//     return view('adminlte.master');
// });

Route::get('/', function (){
    return view ('welcome');
});

// Route::get('/data-table', function (){
//     return view('items.data-table');
// });

// Route::get('/pertanyaan/create', 'PertanyaanController@create');
// Route::post('/pertanyaan', 'PertanyaanController@store')->name('post.index'); 
// Route::get('/pertanyaan', 'PertanyaanController@index');
// Route::get('/pertanyaan/{id}', 'PertanyaanController@show');
// Route::get('/pertanyaan/{id}/edit', 'PertanyaanController@edit');
// Route::put('/pertanyaan/{id}', 'PertanyaanController@update');
// Route::delete('/pertanyaan/{id}', 'PertanyaanController@destroy');


Route::resource('pertanyaan', 'PertanyaaController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
