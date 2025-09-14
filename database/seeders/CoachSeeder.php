<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use App\Models\User;
use App\Models\Coach;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use App\Models\CoachCategory;
use App\Models\CoachingDayStatus;
use App\Models\CoachingSlot;
use App\Constants\GlobalConstant;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CoachSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $user = User::where('email', 'coach@app.com')->first();

        $data = [
            'uuid'              => Str::uuid(),
            'user_id'           => $user->id,
            'coach_category_id' => CoachCategory::inRandomOrder()->value('id'),
            'professional_title' => 'Devops Engineer',
            'about_me' => $faker->sentence(100),
            'is_subscription_enable' => 1,
            'coaching_available' => 1,
            'hourly_rate' => 60,
            'status' => ACTIVE,
        ];

        Coach::create($data);

        // coach schedule add
        CoachingDayStatus::create([
            'user_id' => $user->id,
            'day' => 1,
        ]);

        CoachingSlot::create([
            'user_id' => $user->id,
            'day' => 1,
            "start_time" => "13:00",
            "end_time" => "14:00",
            'time' => '01:00 PM - 02:00 PM',
            'duration' => '1 Hour 0 Minute',
            'hour_duration' => 1,
            'minute_duration' => 0,
        ]);

        // Add Multiple Coach

        $prefessions = ['Devops Engineer', 'Web Developer', 'Software Engineer', 'System Administrator'];

        foreach (range(1, 15) as $index) {

            $id = User::create([
                'uuid'              => Str::uuid(),
                'first_name'        => $faker->firstNameMale,
                'last_name'         => $faker->lastName,
                'email'             => $faker->unique()->email(),
                'email_verified_at' => now(),
                'password'          => '$2y$10$mmv2lR.uMmhG.EC9FQEirO4YrLtjqATfmzDPwIPKLIDLSCNhPtVqu',   // 12345678
                'user_type'         => USER_TYPE_COACH,
                'gender'            => 'male',
                'status'            => ACTIVE,
                'remember_token'    => Str::random(60),
                'phone'             => $faker->phoneNumber,
                'date_of_birth'     => '1988-10-21',
                'agreed_terms'      => 1,
            ])->id;

            Coach::create(
                [
                    'uuid'              => Str::uuid(),
                    'user_id'           => $id,
                    'coach_category_id' => CoachCategory::inRandomOrder()->value('id'),
                    'professional_title' => Arr::random($prefessions),
                    'about_me' => $faker->sentence(100),
                    'is_subscription_enable' => 1,
                    'coaching_available' => 1,
                    'hourly_rate' => Arr::random([20, 30, 40, 50, 60]),
                    'status' => Arr::random([APPROVED, PENDING, BLOCK]),
                ]
            );

            // coach schedule add
            CoachingDayStatus::create([
                'user_id' => $id,
                'day' => 1,
            ]);

            CoachingSlot::create([
                'user_id' => $id,
                'day' => 1,
                "start_time" => "13:00",
                "end_time" => "14:00",
                'time' => '01:00 PM - 02:00 PM',
                'duration' => '1 Hour 0 Minute',
                'hour_duration' => 1,
                'minute_duration' => 0,
            ]);
        };
    }
}
