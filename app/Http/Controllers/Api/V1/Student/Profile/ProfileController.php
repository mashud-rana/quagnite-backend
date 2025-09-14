<?php

namespace App\Http\Controllers\Api\V1\Student\Profile;

use App\Models\User;
use App\Models\Student;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Validation\Rules\Password;
use App\Services\Api\V1\Student\ProfileService;
use App\Http\Resources\Api\V1\Student\UserResource;
use App\Http\Requests\Api\V1\Student\ProfileRequest;

class ProfileController extends Controller
{
    use ApiResponse;
    protected $profileService;

    public function __construct(ProfileService $profileService)
    {
        $this->profileService = $profileService;
    }

    public function show()
    {

        $user = auth()->user();

        try {

            if (!$user) {
                return $this->error('User not found', 404);
            }
            return $this->success(new UserResource($user));
        } catch (\Exception $e) {
            logger($e->getMessage());
            return $this->error($e->getMessage());
        }
    }

    public function updateProfile(ProfileRequest $request, $id)
    {
        $data = $request->validated();
        try {
            $this->profileService->storeOrUpdate($data, $id);
            $user = User::find($id);
            $student = $user->student()->updateOrCreate(
                ['user_id' => $user->id],
                [
                    'subscription_type' => $request->subscription_type ?? null,
                    'country' => $request->country ?? null,
                    'state' => $request->state ?? null,
                    'address' => $request->address,
                ]
            );

            return $this->success(new UserResource($user), 'Profile Update Successfully.');
        } catch (\Exception $e) {
            logger($e->getMessage());
            return $this->error($e->getMessage());
        }
    }

    public function updatePassword(Request $request, $id)
    {

        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => [
                'required', 'string', 'confirmed', Password::min(8)
                    ->mixedCase()
                    ->letters()
                    ->numbers()
                    ->symbols(),
            ],
            'new_password_confirmation' => ['required', Password::min(8)],
            'avatar'        => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        try {
            $this->profileService->storeOrUpdate([
                'avatar' => $request->avatar ?? null,
                'password' => Hash::make($request->new_password)
            ], $id);

            return $this->success( message: 'Profile Password Change Successfully.');
        } catch (\Exception $e) {
            logger($e->getMessage());
            return $this->error($e->getMessage());
        }

    }

}
