<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Support\Str;
use App\Constants\GlobalConstant;
use Illuminate\Database\Seeder;
use App\Models\SubscriptionList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $subscriptionList = SubscriptionList::active()->first();

        // $data = [
        //     'user_id'            => $subscriptionList->user_id,
        //     'subscription_list_id'    => $subscriptionList->id,
        //     'trx_no'         => Str::uuid(),
        //     'pay_method'     => GlobalConstant::PAYMENT_METHOD_PAYPAL,
        //     'amount'         => $subscriptionList->subscription->price,
        // ];

        // Payment::create($data);
    }
}
