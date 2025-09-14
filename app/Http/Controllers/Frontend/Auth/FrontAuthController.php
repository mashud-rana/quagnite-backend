<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use App\Services\User\UserAuthService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class FrontAuthController extends Controller
{
    protected $userAuthService;

    public function __construct(UserAuthService $userAuthService)
    {
        $this->userAuthService = $userAuthService;
    }

    /**
     * Submit Reset password
     *
     * @param request
     * @return response
     */
    public function submitResetPassword(Request $request)
    {
        $data = $request->validate([
            'password' => [
                'required', 'string', 'confirmed', Password::min(8)
                    ->mixedCase()
                    ->letters()
                    ->numbers()
                    ->symbols(),
            ],
            'password_confirmation' => ['required', Password::min(8)],
            'token' => ['required'],
        ]);

        return $this->userAuthService->resetPasswordSubmitUpdate($data);
    }
}
