<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class NotesGuard
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
        if($request->_token == csrf_token())
            // continue if we found the token, yeay!
            return $next($request);
        else
            // if the csrf token mismatch, we back to homepage
            return redirect(route('homepage'));
        }
}
