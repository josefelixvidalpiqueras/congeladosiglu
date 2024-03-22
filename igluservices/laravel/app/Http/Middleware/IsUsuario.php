<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsUsuario
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()->is_admin==1) {
            return $next($request);
        }elseif (auth()->user()->is_usuario==1) {
            return $next($request);
        }else{
            return redirect('inicio')->with('error','No tienes acceso');
        }
    }
}