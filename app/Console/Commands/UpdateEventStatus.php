<?php

namespace App\Console\Commands;

use App\Models\Event;
use Illuminate\Console\Command;

class UpdateEventStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'events:update-status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update event status to past if the event date is over.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $updated = Event::where('event_end', '<', now())
            ->where('status', '!=', PAST)
            ->update(['status' => PAST]);

        $this->info("Updated $updated event(s) to past.");
    }
}
