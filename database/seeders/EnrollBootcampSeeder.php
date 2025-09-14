<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Bootcamp;
use App\Models\EnrollBootcamp;
use Illuminate\Database\Seeder;
use App\Models\SubscriptionList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EnrollBootcampSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'student@app.com')->first();

        EnrollBootcamp::create([
            'user_id' => $user->id,
            'bootcamp_id' => Bootcamp::approved()->inRandomOrder()->value('id'),
            'subscription_list_id' => SubscriptionList::where('user_id', $user->id)->first()->id,
        ]);
    }
}
