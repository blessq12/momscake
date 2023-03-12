<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages;

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

Route::get('/',[Pages::class,'index'])->name('index');
Route::get('/catalog',[Pages::class,'catalog'])->name('catalog');
Route::get('/delivery',[Pages::class,'delivery'])->name('delivery');
