<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Student;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Constants\GlobalConstant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $user = User::where('email', 'student@app.com')->first();

        $data = [
            'uuid'              => Str::uuid(),
            'user_id'           => $user->id,
            'about_me' => $faker->sentence(100),
            'address' => $faker->address(),
        ];

        Student::create($data);

        // Multiple Students


        foreach (range(1, 15) as $index) {

            $id = User::create([
                'uuid'              => Str::uuid(),
                'first_name'        => $faker->firstNameMale,
                'last_name'         => $faker->lastName,
                'email'             => $faker->unique()->email(),
                'email_verified_at' => now(),
                'password'          => '$2y$10$mmv2lR.uMmhG.EC9FQEirO4YrLtjqATfmzDPwIPKLIDLSCNhPtVqu',   // 12345678
                'user_type'         => USER_TYPE_STUDENT,
                'gender'            => 'male',
                'status'            => ACTIVE,
                'remember_token'    => Str::random(60),
                'phone'             => $faker->phoneNumber,
                'date_of_birth'     => '1988-10-21',
                'agreed_terms'      => 1,
            ])->id;

            Student::create(
                [
                    'uuid'              => Str::uuid(),
                    'user_id'           => $id,
                    'about_me' => $faker->sentence(100),
                    'address' => $faker->address(),
                ]
            );
        };
    }
}
