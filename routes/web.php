<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

Route::get('/', function () {
    return view('welcome');
})->name('/');

Route::get('/noticias', [NewsController::class, 'index'])->name('noticias');
Route::get('/repositorio', function(){ return view('repositorio.index');})->name('repositorio');
Route::get('/catalogo', function(){ return view('catalogo.index');})->name('catalogo');

Route::get('/bd', function(){ return view('bd.index');})->name('bd');
// Agrega por Angie la primera vista del Administrador
Route::get('/administrador', function(){ return view('administrador.index');})->name('administrador');
<<<<<<< HEAD
Route::get('/salas', function(){ return view('salas.index');})->name('salas');
//Aquí termina
=======
Route::get('/administrador', function(){ return view('administrador.reservas');})->name('administrador');
Route::get('/administrador', function(){ return view('administrador.prestamos');})->name('administrador');
Route::get('/administrador', function(){ return view('administrador.reservaSala');})->name('administrador');
Route::get('/administrador', function(){ return view('administrador.reservaComputadoras');})->name('administrador');
Route::get('/administrador', function(){ return view('administrador.prestamoTablets');})->name('administrador');
Route::get('/administrador', function(){ return view('administrador.prestamoCalculadoras');})->name('administrador');
Route::get('/administrador', function(){ return view('administrador.prestamoLibro');})->name('administrador');
// Aquí termina
>>>>>>> f383f7e1175439035c75755c6cdf9bfb0aae670c


Route::get('/acerca',  function(){ return view('acerca.index');})->name('acerca');


Route::get('/dashboard', function () {
    return view('/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

/* Prueba 1 */

