<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;

class CheckIfUserIsAdmin
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

        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->admin == true) {
            return $next($request);
        }

        return redirect()->route('home')->with('error', 'Debes ser administrador para acceder a esta sección.');




        return $next($request);
    }
}
