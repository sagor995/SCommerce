<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::user()->is_admin == 1){
            return $next($request);
        }else{

            $notification = array(
                'message' => 'You are not allowed to access this page.',
                'alert-type' => 'error'
            );

            return redirect()->route('homepage')->with($notification);
        }
    }
}
