<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerifyIfValidUsername
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
        if (auth()->check()) {
            $requestedUsername = $request->segment(1);
            $authUsername = auth()->user()->username;
            
            if ($requestedUsername == $authUsername) return $next($request);
            return redirect('/');
        }
    }
}
