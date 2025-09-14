<?php

namespace App\Http\Controllers\Api\V1\Auth;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rules\Password;

class ForgetPasswordController extends Controller
{
    public function forgetPassword(Request $request){

        $request->validate([
            'email' => [
                'required',
                'string',
                'email',
                Rule::exists('users', 'email')->where(function ($query) {
                    $query->whereIn('user_type', [USER_TYPE_ADMIN, USER_TYPE_STUDENT, USER_TYPE_COACH, USER_TYPE_TEACHER, USER_TYPE_MEMBER]);
                }),
            ],
        ]);
        $email = $request->email;

        try {
            DB::beginTransaction();
            $user = User::where('email', $email)->first();
            // Check if the user exists
            if (!$user) {
                return $this->sendError('User not found.', ['error' => 'User not found'], 404);
            }

            $this->regenerateAndSendOtp($user);

            DB::commit();
            return response()->json(
                [
                    'success' => true,
                    'message' => 'Forget password email sent successfully.'
                ]
            );
        } catch (\Exception $e) {
            DB::rollBack();
            return $this->error($e->getMessage());
            //throw $th;
        }

    }

    public function emailForgetOtp($user, $otp){
        try {
                Mail::send('v1.email.forget-password.forget-password-with-otp', ['user' => $user, 'otp' => $otp], function ($message) use ($user) {
                    $message->to($user->email);
                    $message->subject('Email Forget Password Mail');
                });
            } catch (\Throwable $th) {
                // Log error if needed
            }
    }

    public function otpVerify(Request $request){
        $request->validate([
            'forget_opt' => 'required|digits:6|exists:users,forget_opt', // Ensures exactly 6 digits and OTP exists
        ]);
        // Find the user with the given email and their associated OTP
        $user = User::where('forget_opt', $request->forget_opt)
                    ->first();
            // Check if the user exists
        if (!$user) {
            return $this->sendError('Forget OTP not found.', ['error' => 'Forget OTP not found'], 200);
        }

            // Check if the OTP has expired
        if (!$user->forget_expires_at || Carbon::now()->greaterThan(Carbon::parse($user->forget_expires_at))) {
            return $this->sendError('Forget OTP expired.', ['error' => 'Forget OTP has expired'], 400);
        }

        return response()->json(
                [
                    'success' => true,
                    'message' => 'Forget OTP verified successfully',
                    'forget_opt' => $user->forget_opt

                ]
            );
        // dd($request->all());

    }

    public function otpPasswordUpdate(Request $request){
        $request->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password_confirmation' => ['required', 'string', 'min:8'],
            'forget_opt' => 'required|digits:6|exists:users,forget_opt', // Ensures exactly 6 digits and OTP exists
        ]);
        // Find the user with the given email and their associated OTP
        $user = User::where('forget_opt', $request->forget_opt)
                    ->first();
            // Check if the user exists
        if (!$user) {
            return $this->sendError('Forget OTP not found.', ['error' => 'Forget OTP not found'], 200);
        }
            // Check if the OTP has expired
        if (!$user->forget_expires_at || Carbon::now()->greaterThan(Carbon::parse($user->forget_expires_at))) {
            return $this->sendError('Forget OTP expired.', ['error' => 'Forget OTP has expired'], 400);
        }


        $user->password = Hash::make($request->password);
        $user->forget_opt = null;
        $user->forget_expires_at = null;
        $user->save();

        return response()->json(['message' => 'Password reset successful','success'=> true]);

    }

    public function otpAgainGenerate(Request $request)
    {
        $request->validate([
            'forget_opt' => [
                'required',
                'digits:6',
                Rule::exists('users', 'forget_opt'),
            ],
        ]);

        $forget_opt = $request->forget_opt;

        try {
            DB::beginTransaction();
            $user = User::where('forget_opt', $forget_opt)->first();
            // Check if the user exists
            if (!$user) {
                return $this->sendError('User not found.', ['error' => 'User not found'], 404);
            }

            $this->regenerateAndSendOtp($user);

            DB::commit();
            return response()->json([
                'success' => true,
                'message' => 'Forget password OTP sent successfully.'
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return $this->error($e->getMessage());
        }
    }

    /**
     * Regenerate OTP, send email, and update user forget_opt and expiry.
     * @param User $user
     * @return void
     */
    private function regenerateAndSendOtp(User $user)
    {
        $otp = generateOTP();
        $this->emailForgetOtp($user, $otp);
        $user->forget_opt = $otp;
        $user->forget_expires_at = Carbon::now()->addMinutes(FORGET_PASSWORD_EXPIRE_IN_MIN);
        $user->save();
    }
}
