<?php

namespace App\Http\Middleware;

use Closure;
use http\Client\Curl\User;

class CheckRole
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
        if (auth()->check() && auth()->user()->role == 1){

        return $next($request);
    }
        else
            {
            return redirect(route('login'));
        }


    }
}
