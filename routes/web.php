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

Route::get('/salas', function(){ return view('salas.index');})->name('salas');
//Aquí termina

Route::get('/administrador', function(){ return view('administrador.reservas');})->name('administrador');
Route::get('/administrador/prestamoCalculadoras', function(){ return view('administrador.prestamoCalculadoras');})->name('prestamoCalculadoras');
Route::get('/administrador/prestamoLibro', function(){ return view('administrador.prestamoLibro');})->name('prestamoLibro');
Route::get('/administrador/prestamos', function(){ return view('administrador.prestamos');})->name('prestamos');
Route::get('/administrador/prestamoTablets', function(){ return view('administrador.prestamoTablets');})->name('prestamoTablets');
Route::get('/administrador/reservaComputadoras', function(){ return view('administrador.reservaComputadoras');})->name('reservaComputadoras');
Route::get('/administrador/reservas', function(){ return view('administrador.reservas');})->name('reservas');
Route::get('/administrador/reservaSala', function(){ return view('administrador.reservaSala');})->name('reservaSala');
// Aquí termina



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

