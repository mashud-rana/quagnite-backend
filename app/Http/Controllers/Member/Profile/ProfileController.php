<?php

namespace App\Http\Controllers\Member\Profile;

use App\Models\User;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use App\Http\Controllers\Controller;
use App\Http\Requests\Common\ProfileRequest;
use App\Services\Common\ProfileService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class ProfileController extends Controller
{
    protected $profileService;

    public function __construct(ProfileService $profileService)
    {
        $this->profileService = $profileService;
    }


    public function index()
    {
        set_page_meta('Profile Settings');
        $user = auth()->user();
        return view('member.profile.index', compact('user'));
    }

    /**
     * Update user profile info
     */
    public function updateProfile(ProfileRequest $request, $id)
    {
        $data = $request->validated();
        try {
            $this->profileService->storeOrUpdate($data, $id);
            record_updated_flash('Profile Update Successfully.');
            return back();
        } catch (\Exception $e) {
            return back();
        }
    }

    /**
     * Update the user password
     *
     * @return If changed the password redirect to login page
     */
    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password'     => ['required', new MatchOldPassword],
            'new_password'         => [
                'required', 'string', 'confirmed', Password::min(8)
                    ->mixedCase()
                    ->letters()
                    ->numbers()
                    ->symbols()
            ],
            'new_password_confirmation' => ['required', Password::min(8)],
        ]);

        $user = User::find(auth()->user()->id)->update(['password' => Hash::make($request->new_password)]);

        if ($user) {
            record_updated_flash('Password Update Successfully.');
            Auth::logout();
            return redirect('/');
        }
        return redirect()->route('member.profile');
    }
}
