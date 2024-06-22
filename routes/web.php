<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/noticias', [NewsController::class, 'index'])->name('noticias');
Route::get('/inicio', [NewsController::class, 'index'])->name('inicio');
Route::get('/repositorio', function(){ return view('repositorio.index');})->name('repositorio');
Route::get('/acerca', [NewsController::class, 'index'])->name('acerca');
Route::get('/catalogo', [NewsController::class, 'index'])->name('catalogo');


Route::get('/dashboard', function () {
    return view('/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
