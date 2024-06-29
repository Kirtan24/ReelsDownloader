<?php

use App\Http\Controllers\InstagramController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReelsController;

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

Route::get('/',[ReelsController::class,'index'])->name('home');
Route::post('/download-reels', [InstagramController::class, 'downloadReels'])->name('download');