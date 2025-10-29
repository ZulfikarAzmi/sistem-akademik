<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role  // <-- role yang dikirim dari route
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next, string $role)
{
    if (!Auth::check()) {
        return redirect('/login');
    }

    if (Auth::user()->role !== $role) {
        abort(403, 'Unauthorized'); 
    }

    return $next($request);
}

}
