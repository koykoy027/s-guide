<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class student
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        if (Auth::check()) {
            if (Auth::user()->role == 'student') {
                return $next($request);
            } else {
                return redirect('counselor/dashboard')->with('message', 'Access Denied'); //abort(401, 'Unauthorized action')
            }
        } else {
            return redirect()->back()->with('message', 'Login to access the website');
        }
        return $next($request);
    }
}
