<?php

namespace App\Console\Commands;

use App\Models\EnrollApi;
use App\Models\SubscriptionList;
use Illuminate\Console\Command;

class ManageSubscriptions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'manage:subscriptions';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $hourMintues = date('H:i');
        // Update Regular subscription status
        $expiredRegularSubscriptions = SubscriptionList::where('valid_till', '<', now())->active()->get();

        if (count($expiredRegularSubscriptions) > 0) {

            foreach ($expiredRegularSubscriptions as $subscription) {

                $subscription->update(['status' => EXPIRED]);

                info('Regular Subscription expired for User ID: '.$subscription->user_id);
            }
        } else {
            info("[$hourMintues] There is no Regular expired subscription to update!");
        }

        // Update api subscription status
        $expiredApiSubscriptions = EnrollApi::where('valid_till', '<', now())->active()->get();

        if (count($expiredApiSubscriptions) > 0) {

            foreach ($expiredRegularSubscriptions as $subscription) {

                $subscription->update(['status' => EXPIRED]);

                info('API Subscription expired for User ID: '.$subscription->user_id);
            }
        } else {
            info("[$hourMintues] There is no API expired subscription to update!");
        }

        return 0;
    }
}
