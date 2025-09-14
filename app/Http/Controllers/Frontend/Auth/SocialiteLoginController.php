<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use App\Jobs\SendEmailQueueJob;
use App\Mail\WelcomeMail;
use App\Models\User;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialiteLoginController extends Controller
{
    public function redirectToProvider(string $provider): RedirectResponse
    {
        // Get allowed Auth Providers
        $allowedAuthProvider = AUTH_PROVIDER_ARRAY;

        // Check the right provider given to the url
        if (! in_array($provider, (array) $allowedAuthProvider)) {
            return redirect()->route('auth.login');
        }

        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback(string $provider): RedirectResponse
    {
        try {
            $socialiteUser = Socialite::driver($provider)->stateless()->user();
            $full_name_array = explode(' ', $socialiteUser->getName());
        } catch (Exception $exception) {
            return redirect()->route('auth.login');
        }

        // find user
        $find_user = User::where('provider', $provider)
            ->where('provider_id', $socialiteUser->getId())
            ->where('email', $socialiteUser->getEmail())
            ->first();

        if ($find_user) {
            auth()->login($find_user, true);

            return redirect('/'.$find_user->user_type.'/dashboard');
        }

        // Deleted user
        $deletedUser = User::withTrashed()
            ->where('provider', $provider)
            ->where('provider_id', $socialiteUser->getId())
            ->where('email', $socialiteUser->getEmail())
            ->first();

        if ($deletedUser) {
            something_wrong_flash('Your account is Blocked!');

            return redirect()->route('auth.login');
        }

        // Get the User if the user already registered otherwise it will create new instance
        // $user = User::firstOrCreate(
        //     [
        //         'provider' => $provider,
        //         'provider_id' => $socialiteUser->getId(),
        //     ],
        //     [
        //         'email' => $socialiteUser->getEmail(),
        //         'first_name'        => $full_name_array[0],
        //         'last_name'         => $full_name_array[1] ?? $full_name_array[0],
        //         'avatar'            => $socialiteUser->getAvatar(),
        //         'password'          => Hash::make(random_number()),
        //         'user_type'         => 'member',
        //         'agreed_terms'      => 1,
        //         'status'            => ACTIVE,
        //         'email_verified_at' => now(),
        //     ]
        // );

        $user = User::create(
            [
                'provider' => $provider,
                'provider_id' => $socialiteUser->getId(),
                'email' => $socialiteUser->getEmail(),
                'first_name' => $full_name_array[0],
                'last_name' => $full_name_array[1] ?? $full_name_array[0],
                'avatar' => $socialiteUser->getAvatar(),
                'password' => Hash::make(random_number()),
                'user_type' => USER_TYPE_MEMBER,
                'agreed_terms' => 1,
                'status' => ACTIVE,
                'email_verified_at' => now(),
            ]
        );

        // Send welcome email
        try {
            SendEmailQueueJob::dispatch($user->email, new WelcomeMail($user->first_name));
        } catch (\Exception $e) {
            // Handle mail sending error
            logger($e->getMessage());
        }

        // Log the user in
        auth()->login($user, true);

        // Redirect to dashboard
        return redirect()->route('member.dashboard');
    }
}
