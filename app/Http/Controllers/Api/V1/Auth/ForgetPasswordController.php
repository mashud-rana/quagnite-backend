<?php

namespace App\Http\Controllers\Api\V1\Auth;

use Carbon\Carbon;
use App\Models\User;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Traits\PaginatedResourceTrait;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rules\Password;

class ForgetPasswordController extends Controller
{
    use ApiResponse, PaginatedResourceTrait;
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
                return $this->error('User not found.');
            }

            // $this->regenerateAndSendOtp($user);
            $this->passwordResetOnEmail($user);

            DB::commit();
            return $this->success($user, 'Verification link sent successfully.');

        } catch (\Exception $e) {
            DB::rollBack();
            return $this->error($e->getMessage());
            //throw $th;
        }

    }

       // Step 2: Verify token
    public function verifyToken($token)
    {

        $record = DB::table('password_resets')->where('token', $token)->first();

        if (!$record) {
            return $this->error('Invalid or expired token');
        }
        return $this->success([
            'email' => $record->email
        ], 'Valid token');

    }

    // Step 3: Reset password
    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'password' =>  [
                'required', 'string', 'confirmed', Password::min(8)
                    ->mixedCase()
                    ->letters()
                    ->numbers()
                    ->symbols(),
            ],
            'password_confirmation' => ['required', Password::min(8)],
        ]);

        $record = DB::table('password_resets')->where([
            'token' => $request->token
        ])->first();

        if (!$record) {
            // return response()->json(['message' => 'Invalid token'], 400);
            return $this->error('Invalid or expired token');
        }

        User::where('email', $record->email)->update([
            'password' => Hash::make($request->password)
        ]);

        DB::table('password_resets')->where('email', $record->email)->delete();

        // return response()->json(['message' => 'Password has been reset successfully']);
            return $this->success(message: 'Password has been reset successfully');
    }

    private function passwordResetOnEmail(User $user)
    {
        $token = \Str::random(64);
        DB::table('password_resets')->updateOrInsert(
        ['email' => $user->email],
        ['token' => $token, 'created_at' => Carbon::now()]
        );

        $url = env('NEXTJS_APP_URL') . 'auth/reset-password/' . $token;


        $this->verifyUrlSendToMail($user, $url);

    }


    public function verifyUrlSendToMail($user, $url){
        try {
            Mail::send('v1.email.forget-password.email-verification', ['user' => $user, 'url' => $url], function ($message) use ($user) {
                $message->to($user->email);
                $message->subject('Reset Password Link');
            });
        } catch (\Throwable $th) {
            // Log error if needed
        }
    }
}
