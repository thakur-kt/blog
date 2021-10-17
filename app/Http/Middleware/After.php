<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class After
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$role)
    {
        dd($role);

//         if(in_array($role,['editor','kt'])){
// dd();
//         }
        $response = $next($request);
// dump($response->getContent());
        // Perform action
        $response->setContent(['data'=>$response->getContent()]);


        return $response;
    }
}
