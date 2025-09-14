<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\ApiCall;
use App\Models\ApiPlan;
use App\Models\EnrollApi;

class LogApiCAll
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

    public function handle($request, Closure $next)
    {
        $response = $next($request);

        if (!$organization = $request->user()) {
            return response()->json(['error' => "You don't have any active API Plan."], 403);
        };

        $enroll = EnrollApi::whereUserId($organization->user_id)->active()->first();

        $tokenId = $request->bearerToken();

        if (!$enroll) {
            return response()->json(['error' => "You don't have any active API Plan."], 403);
        }

        // Check if the user or token has exceeded the API call limit
        if ($this->hasExceededApiLimit($enroll, $organization->user_id)) {
            return response()->json(['error' => 'API call limit exceeded'], 429);
        }

        // Log the API call
        ApiCall::create([
            'user_id'    => $organization->user_id,
            'api_plan_id'    => $enroll->api_plan_id,
            'token_id'   => $tokenId,
            'endpoint'   => $request->getPathInfo(),
            'ip_address' => $request->ip(),
        ]);

        return $response;
    }

    private function hasExceededApiLimit($enroll, $userId)
    {
        $plan = ApiPlan::whereId($enroll->api_plan_id)->first();
        $totalCall = ApiCall::whereUserId($userId)->whereApiPlanId($enroll->api_plan_id)->count();

        return $plan->call_limit <= $totalCall;
    }
}
