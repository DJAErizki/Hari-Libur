<?php

use App\Http\Controllers\homecontroller;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

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

Route::get('coach', [homecontroller::class,'coach'])->name('coach');
Route::get('welcome', [homecontroller::class,'welcome'])->name('welcome');
Route::get('about', [homecontroller::class,'about'])->name('about');
Route::get('profnaz', [homecontroller::class,'about'])->name('profnaz');