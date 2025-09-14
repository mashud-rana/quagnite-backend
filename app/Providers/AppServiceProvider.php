<?php

namespace App\Providers;

use App\Models\BlogCategory;
use App\Models\BootcampCategory;
use App\Models\CoachCategory;
use App\Models\CourseCategory;
use App\Models\EbookCategory;
use App\Models\Event;
use App\Models\Setting;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Model::preventLazyLoading(!app()->isProduction());

        try {
            //load constants
            $constants = config('constants');

            foreach ($constants as $key => $value) {
                if (!defined($key)) {
                    define($key, $value);
                }
            }

            // Add DB settings in the config
            config([
                'settings' => Setting::all([
                    'setting_key', 'setting_value',
                ])->keyBy('setting_key')
                    ->transform(function ($setting) {
                        return $setting->setting_value;
                    })
                    ->toArray(),
            ]);

            // Overwrite Mail Configuration
            $mailData = [
                'driver' => config('settings.mail_mailer'),
                'host' => config('settings.mail_host'),
                'port' => config('settings.mail_port'),
                'encryption' => config('settings.mail_encryption'),
                'username' => config('settings.mail_username'),
                'password' => config('settings.mail_password'),
                'from' => [
                    'address' => config('settings.mail_from_address'),
                    'name' => config('settings.mail_from_name'),
                ],
            ];

            Config::set('mail', $mailData);

            // overwrite services
            $serviceData = [
                'google' => [
                    'client_id' => config('settings.google_client_id'),
                    'client_secret' => config('settings.google_client_secret'),
                    'redirect' => config('settings.google_redirect_url'),
                ],
            ];

            Config::set('services', $serviceData);

            // Overwrite S3 and storage Configuration
            $s3Config = [
                'driver' => 's3',
                'key' => config('settings.aws_key'),
                'secret' => config('settings.aws_secret'),
                'region' => config('settings.aws_region'),
                'bucket' => config('settings.aws_bucket'),
                'url' => config('settings.aws_bucket_endpoint'),
            ];

            Config::set('filesystems.default', config('settings.storage_driver'));
            Config::set('filesystems.disks.s3', $s3Config);

            // Overwrite Vimeo Configurations
            $vimeoConfig = [
                'client_id' => config('settings.vimeo_client'),
                'client_secret' => config('settings.vimeo_secret'),
                'access_token' => config('settings.vimeo_access'),
            ];

            Config::set('vimeo.connections.main', $vimeoConfig);

            // Overwrite aws playground configuration
            // $awsPlaygroundKey = [
            //     'credentials' => [
            //         'key'    => config('settings.aws_playground_key'),
            //         'secret' => config('settings.aws_playground_secret'),
            //         'filepath' => config('settings.aws_playground_filepath'),
            //     ],
            //     'region' => config('settings.aws_playground_region'),
            // ];
            // Config::set('aws', $awsPlaygroundKey);

            // Overwrite chat Configuration
            $pusherMode = config('settings.pusher_mode');
            if ($pusherMode === PUSHER_MODE_DEV) {
                $pusherConfig = [
                    'debug' => false,
                    'key' => config('settings.dev_pusher_app_key'),
                    'secret' => config('settings.dev_pusher_app_secret'),
                    'app_id' => config('settings.dev_pusher_app_id'),
                    'options' => [
                        'cluster' => config('settings.dev_pusher_app_cluster'),
                        'host' => 'api-' . config('settings.dev_pusher_app_cluster') . '.pusher.com',
                        'port' => 443,
                        'scheme' => 'https',
                        'encrypted' => true,
                        'useTLS' => true,
                    ],
                ];
            } else {
                $pusherConfig = [
                    'debug' => false,
                    'key' => config('settings.pusher_app_key'),
                    'secret' => config('settings.pusher_app_secret'),
                    'app_id' => config('settings.pusher_app_id'),
                    'options' => [
                        'cluster' => config('settings.pusher_app_cluster'),
                        'host' => 'api-' . config('settings.pusher_app_cluster') . '.pusher.com',
                        'port' => 443,
                        'scheme' => 'https',
                        'encrypted' => true,
                        'useTLS' => true,
                    ],
                ];
            }
            Config::set('chatify.pusher', $pusherConfig);
            Config::set('broadcasting.pusher', $pusherConfig);

            // event show in footer
            $upcomingEvents = Event::where('status', 1)->get();

            view()->share('upcoming_events', $upcomingEvents);

            // menu categories
            $courseCategories = CourseCategory::where('status', ACTIVE)->get();
            $bootcampCategories = BootcampCategory::where('status', ACTIVE)->get();
            $blogCategories = BlogCategory::where('status', ACTIVE)->get();
            $coachCategories = CoachCategory::where('status', ACTIVE)->get();
            $ebookCategories = EbookCategory::where('status', ACTIVE)->get();

            $allCategories = [
                'courseCategories' => $courseCategories,
                'bootcampCategories' => $bootcampCategories,
                'blogCategories' => $blogCategories,
                'coachCategories' => $coachCategories,
                'ebookCategories' => $ebookCategories,
            ];

            view()->share('menucategories', $allCategories);
        } catch (\Exception $exception) {
            Log::debug('App service provider boot method config error: =>' . $exception->getMessage());
        }
    }
}
