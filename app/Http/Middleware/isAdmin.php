<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()->is_admin == 1) {
            return $next($request);
        } else if (Auth::user()->is_admin == 2) {

            $notification = array(
                'message' => 'You have no access the Admin page.',
                'alert-type' => 'error'
            );

            return redirect()->route('homepage')->with($notification);
        }
    }
}
