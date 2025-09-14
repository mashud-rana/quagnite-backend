<?php

namespace App\Http\Controllers\Common\Profile;

use App\Models\User;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class ProfileController extends Controller
{
    public function index()
    {
        set_page_meta('Profile Update');
        $user = auth()->user();
        return view('common.profile.index', compact('user'));
    }

    /**
     * Update user profile info
     */
    public function updateProfile(Request $request, $id)
    {
        $data = $request->validate(
            [
                'first_name'    => 'required|string|max:50',
                'middle_name'   => 'nullable|string|max:50',
                'last_name'     => 'required|string|max:50',
                'phone'         => 'required|string|max:16',
                'email'         => "required|email|unique:users,email,$id",
                'gender'        => 'required',
                'date_of_birth' => 'required',
            ],
            [
                'first_name.required'    => 'First Name is Required!',
                'last_name.required'     => 'Last Name is Required!',
                'phone.required'         => 'Phone Number is Required!',
                'email.required'         => 'Email is Required!',
                'gender.required'        => 'Gender is Required!',
                'date_of_birth.required' => 'Date of birth is Required!',
            ]
        );

        try {
            $user = User::findOrFail($id);
            $user->update($data);
            if ($user) {
                record_updated_flash('Profile Update Successfull.');
                return back();
            }
        } catch (\Exception $e) {
            return back();
        }
    }
    /**
     * user avatar update
     */
    public function avatarUpdate(Request $request)
    {
        $user = auth()->user();
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');

            $fileName = time() . '-' . $user->first_name . '.' . $avatar->getClientOriginalExtension();
            $avatar->move(storage_path() . '/app/public/users_avatar/', $fileName);

            if ($user->avatar) {
                try {
                    unlink(storage_path('/app/public/users_avatar/') . $user->avatar);
                } catch (\Exception $e) {
                }
            }

            $user->avatar = $fileName;
            $user->save();

            if ($user) {
                return response()->json(['success' => 'Avatar updated successfully!'], 200);
            }
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
            record_updated_flash('Password Update Successfull.');
            Auth::logout();
            return redirect('/');
        }
        return redirect()->route('user.profile.info');
    }
}
