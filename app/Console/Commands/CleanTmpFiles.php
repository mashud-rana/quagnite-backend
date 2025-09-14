<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class CleanTmpFiles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clean:tmps';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clean temporary files and directories';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $date = Carbon::now()->subDays(2)->format('m-d-Y');
        $directoryPath = "uploads/tmp/$date/";
        // Check if the directory exists
        if (Storage::disk('public')->exists($directoryPath)) {
            // Delete the directory and its contents
            Storage::disk('public')->deleteDirectory($directoryPath);
            info("Deleted directory: $directoryPath");
        } else {
            info("Directory does not exist: $directoryPath");
        }

        return 0;
    }
}
