<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsNotVerified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(is_null($request->session()->get('auth')->email_verified_at)){
            return redirect()->route('auth.verifyCode')->with(['message' => 'Verify your email to change the password!']);
        }
        return $next($request);
    }
}
