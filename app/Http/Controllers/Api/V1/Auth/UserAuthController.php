<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
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
        ->where('status',ACTIVE)
        ->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The Provided Credentials are incorrect'],
            ]);
        }

        $device = substr($request->userAgent() ?? '', 0, 255);
        $expiresAt = $request->remember ? null : now()->addMinutes(config('session.lifetime'));

        $token = $user->createToken($device, expiresAt: $expiresAt);

        return response()->json([
            'access_token' => $token->plainTextToken,
            'user' => $user
        ], Response::HTTP_CREATED);
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
