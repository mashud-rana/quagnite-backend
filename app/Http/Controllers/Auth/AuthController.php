<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Services\User\UserAuthService;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Validation\Rules\Password;
use App\Http\Requests\Auth\UserRegisterRequest;

class AuthController extends Controller
{
    protected $userAuthService;

    public function __construct(UserAuthService $userAuthService)
    {
        $this->userAuthService = $userAuthService;
    }

    // Login Methods

    public function LoginAs()
    {
        set_page_meta('Login As');
        return view('auth.login_as');
    }

    public function login()
    {
        if (auth()->check()) {

            $user_type = auth()->user()->user_type;

            switch ($user_type) {

                case USER_TYPE_ADMIN:
                    return redirect()->route('admin.dashboard');
                    break;

                case USER_TYPE_TEACHER:
                    return redirect()->route('teacher.dashboard');
                    break;

                case USER_TYPE_COACH:
                    return redirect()->route('coach.dashboard');
                    break;

                case USER_TYPE_STUDENT:
                    return redirect()->route('student.dashboard');
                    break;

                case USER_TYPE_MEMBER:
                    return redirect()->route('member.dashboard');
                    break;

                default:
                    return redirect()->route('auth.login');
                    break;
            }
        } else {

            set_page_meta('Login');
            return view('auth.login');
        }
    }

    public function loginSubmit(Request $request)
    {
        // Validate data
        $error_message = 'Incorrect email address or password';

        $this->validate($request, [
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to login
        $credentials = ['email' => $request->email, 'password' => $request->password];

        if (auth()->attempt($credentials, $request->has('remember'))) {

            $user = auth()->user();

            // if email not verified
            if (is_null($user->email_verified_at)) {

                Auth::logout();

                return redirect()->route('auth.login')
                    ->withErrors([
                        'error_message' => 'Email Not Verified! Please verify your email',
                    ]);
            }
            // Check user type and send them to their dashboard
            switch ($user->user_type) {

                case USER_TYPE_ADMIN:
                    return redirect()->route('admin.dashboard');
                    break;

                case USER_TYPE_TEACHER:
                    return redirect()->route('teacher.dashboard');
                    break;

                case USER_TYPE_COACH:
                    return redirect()->route('coach.dashboard');
                    break;

                case USER_TYPE_STUDENT:
                    return redirect()->route('student.dashboard');
                    break;

                case USER_TYPE_MEMBER:
                    return redirect()->route('member.dashboard');
                    break;

                default:
                    return redirect()->route('auth.login');
                    break;
            }
        }
        // Return with error
        return redirect()->route('auth.login')
            ->withErrors([
                'error_message' => $error_message,
            ]);
    }

    // Register Methods

    public function register()
    {
        set_page_meta('Register');
        return view('auth.register');
    }

    public function registerSubmit(UserRegisterRequest $request)
    {
        $data = $request->validated();

        $data['user_type'] = USER_TYPE_MEMBER;

        try {

            $user = $this->userAuthService->userRegistration($data);

            if ($user) {
                record_created_flash('Signup successful');
                return redirect()->route('auth.login');
            } else {
                return back();
            }
        } catch (\Exception $e) {
            log_error($e);
            return back();
        }
    }

    // Logout

    public function logout(Request $request)
    {
        Auth::logout();
        Cart::destroy();

        return redirect()->route('auth.login');
    }

    // Email verification

    public function verifyAccount(Request $request, $token)
    {
        if (!$request->hasValidSignature()) {
            abort(403, 'Invalid signed URL');
        }

        return $this->userAuthService->verifyEmail($token);
    }

    // Forgot Password Methods

    public function showForgetPasswordEmail()
    {
        set_page_meta('Forgot Password');

        return view('auth.passwords.email');
    }

    /**
     * Reset password
     * @param request
     * @return response
     */
    public function sendResetPasswordLink(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
        ]);
        return $this->userAuthService->sentResetPasswordEmail($request->email);
    }

    public function sentResetLink()
    {
        set_page_meta('Reset Link Sent');

        return view('auth.passwords.link_sent');
    }


    // Reset Password
    public function verifyResetPassword(Request $request, $token)
    {
        if (!$request->hasValidSignature()) {
            abort(403, 'Invalid signed URL');
        }

        if (!User::where('verification_token', $token)->first()) {

            abort(403, 'Invalid Token');
        }

        set_page_meta('Reset Password');

        return view('auth.passwords.reset', [
            'token' => $token
        ]);
    }

    public function submitResetPassword(Request $request)
    {
        $this->validate($request, [
            'token' => ['required', 'string'],
            'password'   => [
                'required', 'string', 'confirmed', Password::min(8)
                    ->mixedCase()
                    ->letters()
                    ->numbers()
                    ->symbols()
            ],
            'password_confirmation' => ['required', Password::min(8)],
        ]);

        $user = User::where('verification_token', $request->token)->first();

        if (!$user) {
            something_wrong_flash('Invalid token');
            return back();
        } else {
            $user->update([
                'password' => Hash::make($request->password),
                'verification_token' => null
            ]);
        }

        record_updated_flash('Password Reset Successfully.');
        return redirect()->route('auth.login');
    }
}
