<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class First
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
        echo "first </br>";

        // return $next($request);
               // dd($role);
               $response = $next($request);
               dump($response->getContent());
                       // Perform action
            $response->setContent(['data2'=>$response->getContent()]);
         return $response;
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
        dump('first....',$response->getContent());
        echo "response sent to browser from first</br>";
    }
}
