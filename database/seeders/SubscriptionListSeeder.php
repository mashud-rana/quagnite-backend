<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Invoice;
use App\Models\Payment;
use App\Models\Subscription;
use Illuminate\Database\Seeder;
use App\Models\SubscriptionList;
use App\Constants\GlobalConstant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubscriptionListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::select('id')->where('email', 'student@app.com')->first();
        $subscription = Subscription::select('id', 'price', 'type')->where('status', ACTIVE)->whereType(YEARLY)->first();

        $data = [
            'user_id'            => $user->id,
            'subscription_id'    => $subscription->id,
            'subscription_type'  => $subscription->type,
            'amount'             => $subscription->price,
            'started_at'         => Carbon::now(),
            'valid_till'         => Carbon::now()->addYear(),
        ];
        SubscriptionList::create($data);

        // create invoice
        $invoice = Invoice::create([
            'user_id' => $user->id,
            'total' => $subscription->price,
            'payment_type' => PAYMENT_METHOD_STRIPE,
        ]);

        $invoice->items()->create([
            'itemable_id' => $subscription->id,
            'itemable_type' => 'App\Models\Subscription',
            'price' => $invoice->total,
        ]);

        Payment::create([
            'user_id' => $user->id,
            'invoice_id' => $invoice->id,
            'payment_type' => PAYMENT_METHOD_STRIPE,
            'amount' => $invoice->total,
        ]);
    }
}
