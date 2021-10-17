<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Second
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        echo "second </br>";
        // return redirect('/');
        return $next($request);
    }
}
