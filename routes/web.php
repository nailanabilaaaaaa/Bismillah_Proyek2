<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProfilSekolahController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/layouts', function () {
    return view('layouts.app');
});

Route::get('/', function(){
    return view('Welcome');
});

Route::get('/Beranda', function(){
    return view('Beranda');
});

Route::get('/Data', function(){
    return view('Data');
});

Route::get('/Program', function () {
    return view('Program');
});

Route::get('/Gallery', function(){
    return view('Gallery');
});

Route::get('/ContactUs', function(){
    return view('ContactUs');
});

Route::resource('/profil', ProfilSekolahController::class);
Route::resource('/Profil', ProfilController::class);
