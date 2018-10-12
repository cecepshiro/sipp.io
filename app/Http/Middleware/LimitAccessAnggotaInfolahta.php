<?php

namespace App\Http\Middleware;

use Closure;

class LimitAccessAnggotaInfolahta
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(auth()->check() && $request->user()->akses == 3){
            return $next($request);
        }
        elseif(auth()->check() && $request->user()->akses == 2){
            return $next($request);
        }
        elseif(auth()->check() && $request->user()->akses == 0){
            return $next($request);
        }

        return redirect('/');
    }
}
