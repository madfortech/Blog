<?php

namespace App\Http\Middleware;
use Closure;

class IsAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {        
        
        // if (auth()->check() && auth()->user()->isAdmin()) {
        //     return redirect()->route('admin.home');
        // }

        return $next($request);
    }
      
}
