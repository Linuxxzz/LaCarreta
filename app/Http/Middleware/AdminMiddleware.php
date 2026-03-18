<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
 
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        //veriicar sesion activa
        if(!Auth::check()){
            return redirect()->route('registro')
                ->with('error', 'Debes registrarte para acceder a esta página');
        }

        //verificar si el usuario es admin
        if(!Auth::user()->is_admin){
            return redirect()->route('registro')
                ->with('error', 'No tienes permisos para acceder a esta página');
        }

        return $next($request);
    }
}
