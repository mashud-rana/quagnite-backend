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
use App\Http\Resources\Api\V1\UserResource;
use App\Http\Resources\Api\V1\UserInfoResource;
use App\Services\Api\V1\Student\ProfileService;
use App\Http\Requests\Api\V1\Student\ProfileRequest;
use App\Http\Resources\Api\V1\Student\StudentResource;

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
        $user= $user->load('student');
        try {

            if (!$user) {
                return $this->error('User not found', 404);
            }
            return $this->success(new StudentResource($user));
        } catch (\Exception $e) {
            logger($e->getMessage());
            return $this->error($e->getMessage());
        }
    }

    public function getUserInfos(){
        $user_info = auth()->user()->user_info ?? [];
        try {

            if (!$user_info) {
                return $this->error('User info not found', 404);
            }
            return $this->success(new UserInfoResource($user_info));
        } catch (\Exception $e) {
            logger($e->getMessage());
            return $this->error($e->getMessage());
        }
    }

   public function updateUserInfos(Request $request)
    {
        $request->validate([
            'billing_name'    => 'nullable|string|max:255',
            'billing_email'   => 'nullable|email|max:255',
            'billing_address' => 'nullable|string|max:255',
            'billing_phone'   => 'nullable|string|max:20',
        ]);

        try {
            $user = auth()->user();
            $data = $request->except(['_method']);

            // ✅ Use updateOrCreate on the model class, not instance
            $user_info = \App\Models\UserInfo::updateOrCreate(
                ['user_id' => $user->id],
                $data
            );

            return $this->success(new UserInfoResource($user_info));
        } catch (\Exception $e) {
            logger()->error('User info update failed: ' . $e->getMessage());
            return $this->error('Failed to update user info', 500);
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

    public function updateProfilePhoto(Request $request, $id)
    {
        $request->validate([
            'avatar'        => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        try {
            $this->profileService->storeOrUpdate($request->all(), $id);
            $user = User::find($id);

            return $this->success(new UserResource($user), 'Profile Photo Update Successfully.');
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
            // 'avatar'        => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'email'         => "required|email|unique:users,email,{$id}",
        ]);


        try {

            $this->profileService->storeOrUpdate([
                'email' => $request->email ?? null,
                'password' => Hash::make($request->new_password),
                //   'avatar' => $request->avatar ?? null,
            ], $id);

            $user = User::find($id);

            return $this->success(new UserResource($user), 'Profile Password Change Successfully.');

        } catch (\Exception $e) {
            logger($e->getMessage());
            return $this->error($e->getMessage());
        }

    }

}
