<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,$role): Response
    {
        if($request->user()->role !== $role){

            if(($role === 'admin') || ($role === 'employee') || ($role === 'sales') || ($role === 'service')){
                return redirect()->route('admin.dashboard')->with('error', 'Access denied');
            }
                
            return \redirect()->route('admin.dashboard');
        }
        return $next($request);
    }
}
