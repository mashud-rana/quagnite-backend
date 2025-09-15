<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Http\Resources\Api\V1\UserResource;
use Illuminate\Validation\ValidationException;

class UserAuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user = User::where('email', $request->email)
            ->where('status', ACTIVE)
            ->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect'],
            ]);
        }

        $accessToken = $user->createToken('access-token', ['*'], now()->addMinutes(config('session.lifetime')))->plainTextToken;
        $refreshToken = $user->createToken('refresh-token', ['*'], now()->addDays(7))->plainTextToken;

        return response()->json([
            'user' => new UserResource($user),
            'access_token' => $accessToken,
            'refresh_token' => $refreshToken,
        ]); // HttpOnly
    }

    public function refresh(Request $request)
    {
        $refreshToken = $request->bearerToken() ?? $request->input('refresh_token');

        if (!$refreshToken) {
            return response()->json(['message' => 'No refresh token provided'], 401);
        }

        // Attempt to find the token in the personal_access_tokens table
        $tokenModel = \Laravel\Sanctum\PersonalAccessToken::findToken($refreshToken);

        if (!$tokenModel || $tokenModel->name !== 'refresh-token') {
            return response()->json(['message' => 'Invalid refresh token'], 401);
        }

        $user = $tokenModel->tokenable;

        if (!$user) {
            return response()->json(['message' => 'User not found'], 401);
        }

        // Optionally, you can revoke the old refresh token here if you want one-time use
        // $tokenModel->delete();

        $accessToken = $user->createToken('access-token', ['*'], now()->addMinutes(config('session.lifetime')))->plainTextToken;
        $refreshToken = $user->createToken('refresh-token', ['*'], now()->addDays(7))->plainTextToken;

        return response()->json([
            'user' => $user,
            'access_token' => $accessToken,
            'refresh_token' => $refreshToken,
        ]);
    }

    public function me(Request $request)
    {
        return response()->json($request->user());
    }


    public function register(Request $request)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required'],
        ]);
        // dd($request->all());
        $user = User::create([
            'first_name' => $request->first_name,
            // 'last_name' => $request->last_name,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'agreed_terms' => 1,
            'user_type' => USER_TYPE_MEMBER,
            'status' => ACTIVE,
            'email_verified_at' => now(),
        ]);

        event(new Registered($user));

        $device = substr($request->userAgent() ?? '', 0, 255);

        $token = $user->createToken($device);

        return response()->json([
            'access_token' => $token->plainTextToken,
            'user' => $user
        ], Response::HTTP_CREATED);
    }
}
