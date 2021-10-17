<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TerminatingMiddleware
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
        echo 'terminate middleware </br>';
        
        return $next($request);
    }

    
    /**
     * Handle tasks after the response has been sent to the browser.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Http\Response  $response
     * @return void
     */
    public function terminate($request, $response)
    {
        echo "response sent to browser </br>";
        dump('terminate....',$response->getContent());
    }
}
