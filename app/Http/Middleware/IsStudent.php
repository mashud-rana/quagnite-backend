<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsStudent
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
            if (Auth::user()->user_type == USER_TYPE_STUDENT || Auth::user()->user_type == USER_TYPE_ADMIN) {
                if (session()->has('redirect_job_url')) {
                    $redirect_job_url = session('redirect_job_url');
                    return redirect()->to($redirect_job_url);
                } else {
                    return $next($request);
                }
            }
        }
        return redirect('/');
    }
}
