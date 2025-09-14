<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CoursePermitted
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        /* if (Auth::check()) {
            if (Auth::user()->user_type == User::USER_TYPE_COMPANY || Auth::user()->user_type == User::USER_TYPE_MENTOR) {
                return $next($request);
            }
        }
        return redirect('/'); */
    }
}
