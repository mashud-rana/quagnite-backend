<?php

namespace Database\Seeders;

use App\Constants\GlobalConstant;
use App\Models\ApiPlan;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ApiPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plans = [
            [
                'title' => 'Essential Plan',
                'type' => API_MONTHLY,
                'call_limit' => 1000,
                'price' => '25',
                'status' => ACTIVE,
            ],
            [
                'title' => 'Essential Plan',
                'type' => API_YEARLY,
                'call_limit' => 100000,
                'price' => '250',
                'status' => ACTIVE,
            ],
            [
                'title' => 'Expert Plan',
                'type' => API_MONTHLY,
                'call_limit' => 2000,
                'price' => '35',
                'status' => ACTIVE,
            ],
            [
                'title' => 'Expert Plan',
                'type' => API_YEARLY,
                'call_limit' => 200000,
                'price' => '350',
                'status' => ACTIVE,
            ],
            [
                'title' => 'Agency Plan',
                'type' => API_MONTHLY,
                'call_limit' => 3000,
                'price' => '50',
                'status' => ACTIVE,
            ],
            [
                'title' => 'Agency Plan',
                'type' => API_YEARLY,
                'call_limit' => 300000,
                'price' => '500',
                'status' => ACTIVE,
            ],
        ];

        foreach ($plans as $item) {
            ApiPlan::create($item);
        }
    }
}
