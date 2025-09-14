<?php

namespace App\Services\User;

use App\Jobs\SendEmailQueueJob;
use App\Mail\ResetPassword;
use App\Mail\VerifyEmail;
use App\Mail\WelcomeMail;
use App\Models\User;
use Illuminate\Mail\SentMessage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class UserAuthService
{
    protected $model;

    /**
     * Call the constructor by using the Model
     */
    public function __construct()
    {
        $this->model = User::class;
    }

    /**
     * User Registration
     */
    public function userRegistration($data)
    {
        return DB::transaction(function () use ($data) {

            $token = Str::random(64);
            $data['status'] = ACTIVE;
            $data['password'] = Hash::make($data['password']);
            $data['verification_token'] = $token;
            $user = User::create($data);

            //Signed url
            $verificationRoute = 'account.verify';
            $parameters = ['token' => $token];
            $expiration = now()->addMinutes(30);
            $verificationUrl = URL::signedRoute($verificationRoute, $parameters, $expiration);

            // Sent the user email verification email
            try {
                SendEmailQueueJob::dispatch($data['email'], new VerifyEmail($data['first_name'], $verificationUrl));
            } catch (\Exception $e) {
                // Handle mail sending error
                logger($e->getMessage());
            }

                return $user;
        });
    }

    /**
     * User verify email
     *
     * @return response
     */
    public function verifyEmail($token)
    {

        try {
            $user = User::where('verification_token', $token)->first();

            if (! $user) {

                abort(403, 'Invalid Token');
            }

            if ($user->email_verified_at) {
                record_updated_flash('This account already verified');
            } else {
                $user->email_verified_at = now();
                $user->verification_token = null;
                $user->save();
                // Send welcome email
                try {
                    SendEmailQueueJob::dispatch($user->email, new WelcomeMail($user->first_name));
                } catch (\Exception $e) {
                    // Handle mail sending error
                    logger($e->getMessage());
                }
                    if ($user->user_type == USER_TYPE_MEMBER) {
                        Auth::login($user);
                        record_created_flash('Successfully verified your account');

                        return redirect()->route('member.dashboard');
                    }
            }
        } catch (\Exception $e) {
            something_wrong_flash('Invalid token or expired');

            return redirect('/');
        }
    }

    /**
     * User reset password submit
     *
     * @return response
     */
    public function sentResetPasswordEmail($email)
    {
        $token = Str::random(64);

        $user = User::where('email', $email)->first();
        if (! $user) {
            something_wrong_flash('Email not found!');

            return back();
        }
        $user['verification_token'] = $token;
        $user->save();

        $username = $user->first_name.' '.$user->last_name;

        $verificationRoute = 'reset.password.verify';
        $parameters = ['token' => $token];
        $expiration = now()->addMinutes(30);
        $url = URL::signedRoute($verificationRoute, $parameters, $expiration);

        // if (Mail::to($email)->send(new ResetPassword($username, $url)) instanceof SentMessage) {
        //     return redirect()->route('reset.link.sent');
        // } else {
        //     something_wrong_flash('Failed! there is some issue with email provider');
        //     return back();
        // }

        try {
            SendEmailQueueJob::dispatch($email, new ResetPassword($username, $url));
        } catch (\Exception $e) {
            logger($e->getMessage());
        }

        return redirect()->route('reset.link.sent');
    }
}
