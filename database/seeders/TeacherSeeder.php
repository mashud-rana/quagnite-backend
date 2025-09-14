<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Coach;
use App\Models\Teacher;
use Faker\Factory as Faker;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use App\Models\CoachingSlot;
use App\Models\CoachCategory;
use App\Models\TeacherCategory;
use Illuminate\Database\Seeder;
use App\Constants\GlobalConstant;
use App\Models\CoachingDayStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $user = User::where('email', 'teacher@app.com')->first();

        $data = [
            'uuid'              => Str::uuid(),
            'user_id'           => $user->id,
            'teacher_category_id' => TeacherCategory::inRandomOrder()->value('id'),
            'professional_title' => 'Devops Engineer',
            'about_me' => $faker->sentence(100),
            'address' => 'New York | USA',
            'hourly_rate' => 60,
            'status' => APPROVED,
        ];

        Teacher::create($data);

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
                'user_type'         => USER_TYPE_TEACHER,
                'gender'            => 'male',
                'status'            => ACTIVE,
                'remember_token'    => Str::random(60),
                'phone'             => $faker->phoneNumber,
                'date_of_birth'     => '1988-10-21',
                'agreed_terms'      => 1,
            ])->id;

            Teacher::create(
                [
                    'uuid'              => Str::uuid(),
                    'user_id'           => $id,
                    'teacher_category_id' => TeacherCategory::inRandomOrder()->value('id'),
                    'professional_title' => Arr::random($prefessions),
                    'about_me' => $faker->sentence(100),
                    'hourly_rate' => Arr::random([20, 30, 40, 50, 60]),
                    'status' => Arr::random([APPROVED, PENDING, BLOCK]),
                ]
            );
        };
    }
}
