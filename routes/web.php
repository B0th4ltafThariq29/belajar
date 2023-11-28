<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', function() {
    return view('form');
});

auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

Route::get('/soal', 'App\Http\Controllers\SoalController@index');

Route::get('/data', 'App\Http\Controllers\SiswaController@index');
Route::get('/tambah-data', 'App\Http\Controllers\SiswaController@tambah');
Route::post('/datatabel/store', 'App\Http\Controllers\SiswaController@store');

//edit dan hapus data
Route::get('data/edit/{id}', 'App\Http\Controllers\SiswaController@edit');
route::post('/data/update/', 'App\Http\Controllers\SiswaController@update');
route::delete('/data/delete/{id}', 'App\Http\Controllers\SiswaController@delete');




