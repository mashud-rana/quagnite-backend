<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        //====== Cronjob Setup ====
        // crontab -e
        // 0 8 * * * cd /app-path && php artisan schedule:run >> /dev/null 2>&1
        // 30 8 * * * cd /app-path && php artisan schedule:run >> /dev/null 2>&1
        // 0 0 * * * cd /app-path && php artisan schedule:run >> /dev/null 2>&1

        $schedule->command('manage:subscriptions')->everyFiveMinutes();
        $schedule->command('manage:playgrounds')->everyTenMinutes();
        $schedule->command('events:update-status')->everyTenMinutes();
        $schedule->command('clean:tmps')->daily();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
