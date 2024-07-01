<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class Bibliotecario
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return redirect()->route('login'); // Redirigir si el usuario no está autenticado
        }
        // Verificar si el usuario no es biblio
        if (!$request->user()->rol==='bibliotecario') {
            return redirect()->route('inicio'); // Redirigir si el usuario no es admin
        }
        // Si es admin, permitir acceso al siguiente middleware o ruta
        return $next($request);
    
    }
}
