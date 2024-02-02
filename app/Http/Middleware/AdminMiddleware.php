<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
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

    /**
     * cette fonction s'assure que seuls les utilisateurs authentifiés qui sont des administrateurs peuvent accéder à la route ou à l'action pour laquelle ce middleware est appliqué
     * Sinon, l'utilisateur est redirigé vers la page de connexion
     */
        if(auth()->check() && auth()->user()->is_admin == 1){
            return $next($request);
         }
         else {
            return redirect()->route('login');
         }       
    }

}
