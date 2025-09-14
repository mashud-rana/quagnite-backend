<?php

namespace App\Http\Controllers\Coach\Profile;

use App\Models\User;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Services\Common\ProfileService;
use Illuminate\Validation\Rules\Password;
use App\Http\Requests\Common\ProfileRequest;

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
        return view('coach.profile.index', compact('user'));
    }

    /**
     * Update user profile info
     */
    public function updateProfile(ProfileRequest $request, $id)
    {
        $data = $request->validated();
        try {
            $this->profileService->storeOrUpdate($data, $id);
            $user = User::find($id);
            $user->coach()->updateOrCreate(['user_id' => $user->id], [
                'about_me' => $request->about_me,
                'address' => $request->address
            ]);
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
        return redirect()->route('coach.profile');
    }
}
