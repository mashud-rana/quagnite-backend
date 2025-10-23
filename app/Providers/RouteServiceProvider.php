<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/';

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    // protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::prefix('api/v1')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api/v1/api.php'));

            Route::prefix('api/v1')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api/v1/coach.php'));

            Route::prefix('api/v1')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api/v1/member.php'));

            Route::prefix('api/v1')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api/v1/teacher.php'));

            Route::prefix('api/v1')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api/v1/student.php'));

            //Auth
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web/auth.php'));

            //web
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web/web.php'));

            //subscription
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web/subscription.php'));

            //Design
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web/design.php'));

            //admin
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web/admin.php'));

            //coach
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web/coach.php'));

            //member
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web/member.php'));

            //student
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web/student.php'));

            //teacher
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web/teacher.php'));
            //Frontend
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web/frontend.php'));
            //Playground
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web/playground.php'));
            //Command
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/command.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }
}
