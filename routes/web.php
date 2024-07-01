<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;use App\Http\Controllers\InicioAppController;
use App\Http\Controllers\PrestamoController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\NoticiaController;



Route::get('/',[InicioAppController::class, 'index'])->name('inicio');



Route::get('/repositorio', function(){ return view('repositorio.index');})->name('repositorio');
Route::get('/catalogo', function(){ return view('catalogo.index');})->name('catalogo');



Route::get('/nosotros',  function(){ return view('nosotros.index');})->name('nosotros');
Route::get('/noticias', [NoticiaController::class, 'index'])->name('noticias');




// Route::get('/dashboard', function () {
//     return view('/dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');




Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
});



Route::middleware('bibliotecario')->prefix('admin')->as('admin.')->group(function () {
    Route::get('/', [InicioAppController::class, 'admin'])->name('inicio');
    Route::get('/prestamos', [PrestamoController::class, 'admin_index'])->name('prestamos');
    Route::get('/reservas', [ReservaController::class, 'admin_index'])->name('reservas');


    Route::get('/materiales', function(){ return view('administrador.materiales.index');})->name('materiales');
    Route::get('/espacios', function(){ return view('administrador.espacios.index');})->name('espacios');
    
    Route::get('/noticias', [NoticiaController::class, 'admin_index'])->name('noticias');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

require __DIR__.'/auth.php';
