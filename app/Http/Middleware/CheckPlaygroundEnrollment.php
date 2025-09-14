<?php

namespace App\Http\Middleware;

use Closure;
use App\Services\PlaygroundService;

class CheckPlaygroundEnrollment
{
    protected $playgroundService;

    public function __construct(PlaygroundService $playgroundService)
    {
        $this->playgroundService = $playgroundService;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */


    public function handle($request, Closure $next, $playgroundName)
    {

        $user = auth()->user();

        if ($user->user_type !== USER_TYPE_ADMIN && !$this->playgroundService->checkEnrollment($user, $playgroundName)) {
            // User is not enrolled
            return redirect()->route('playground.index');
        }

        return $next($request);
    }
}
