<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     * Este middleware se encargara de autentificar las credenciales del user
     * es decir que esten en la base de datos una vez capturada y validadas
     * las credenciales del usuario
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        #Para las credenciales el valor clave debe coincider con las 
        #columnas de la base de datos
       

        if (auth()->guard()->check()) {
            return $next($request);   
        }

        return back()->with(['message' => "No tiene acceso a esta vista"]);
    }
}
