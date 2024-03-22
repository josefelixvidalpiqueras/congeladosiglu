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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/perfilAdmin', [App\Http\Controllers\HomeController::class, 'perfilAdmin'])->name('perfilAdmin')->middleware('is_admin');

Route::get('/perfilUsuario', [App\Http\Controllers\HomeController::class, 'perfilUsuario'])->name('perfilUsuario')->middleware('is_usuario');
