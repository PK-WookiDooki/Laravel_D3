<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckApiToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //checked
        if(!$request->has('token')){
            return response()->json(['message' => 'Api token is required!']);
        }else if($request->token !== 'psk'){
            return response()->json(['message' => 'Api token is not correct!']);
        };

        //passed
        return $next($request);
    }
}
