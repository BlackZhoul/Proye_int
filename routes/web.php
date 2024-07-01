<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;use App\Http\Controllers\InicioAppController;
use App\Http\Controllers\PrestamoController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\TabletController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\CalculadoraController;






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



    Route::get('/materiales/libros', [LibroController::class,'create'])->name('gestion.libros');
    Route::get('/materiales/libros', [LibroController::class,'detail'])->name('detalle.calculadora');
    Route::get('/materiales/libros', [LibroController::class,'update'])->name('editar.calculadora');
    Route::get('/materiales/libros', [LibroController::class,'create'])->name('eliminar.calculadora');



    Route::get('/materiales/calculadoras', [CalculadoraController::class,'create'])->name('gestion.calculadoras');
    Route::get('/materiales/calculadoras', [CalculadoraController::class,'detail'])->name('detalle.calculadora');
    Route::get('/materiales/calculadoras', [CalculadoraController::class,'update'])->name('editar.calculadora');
    Route::get('/materiales/calculadoras', [CalculadoraController::class,'create'])->name('eliminar.calculadora');

    
    Route::get('/materiales/tablets', [TabletController::class,'create'])->name('gestion.tablets');
    Route::get('/materiales/tablets/{id}', [TabletController::class,'show'])->name('detalle.tablet');
    Route::get('/materiales/tablets/{id}/editar', [TabletController::class,'edit'])->name('editar.tablet');
    Route::get('/materiales/tablets{id}/eliminar', [TabletController::class,'destroy'])->name('eliminar.tablet');

    Route::get('/espacios', function(){ return view('administrador.espacios.index');})->name('espacios');
    
    Route::get('/noticias', [NoticiaController::class, 'admin_index'])->name('noticias');
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

require __DIR__.'/auth.php';
