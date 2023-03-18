<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperHeroeController;

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

Route::get('/',[SuperHeroeController::class,'index'])->name('sup.index');
Route::get('ed/',[SuperHeroeController::class,'create'])->name('sup.create');
Route::get('ed/{id}',[SuperHeroeController::class,'edit'])->name('sup.edit');
Route::get('ed/update/{id}',[SuperHeroeController::class,'update'])->name('sup.update');
Route::post('ed/store',[SuperHeroeController::class,'store'])->name('sup.store');
Route::get('ed/del/{id}',[SuperHeroeController::class,'delete'])->name('sup.del');
Route::get('ed/show/{id}',[SuperHeroeController::class,'show'])->name('sup.show');
