<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartemenController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\SessionController;

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

Route::get('/dasboard', function () {
    return view('dashboard');
})->name('dashboard')
->middleware('iniLogin');

Route::get('/',[SessionController::class,'index'])->middleware('iniTamu'); 
Route::resource('departemen',DepartemenController::class)->middleware('iniLogin');
Route::resource('karyawan',KaryawanController::class)->middleware('iniLogin');

Route::get('/login',[SessionController::class,'index'])->middleware('iniTamu');
Route::get('/sesi',[SessionController::class,'index'])->middleware('iniTamu'); 
Route::post('/sesi/login',[SessionController::class,'login'])->middleware('iniTamu');
Route::get('/sesi/logout',[SessionController::class,'logout']);