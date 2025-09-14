<?php

namespace Database\Seeders;

use App\Models\User;
use App\Constants\GlobalConstant;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'uuid' => Str::uuid(),
                'first_name'        => 'Coach',
                'last_name'         => 'Last',
                'email'             => 'coach@app.com',
                'email_verified_at' => now(),
                'password'          => '$2y$10$mmv2lR.uMmhG.EC9FQEirO4YrLtjqATfmzDPwIPKLIDLSCNhPtVqu',   // 12345678
                'user_type'         => USER_TYPE_COACH,
                'gender'            => 'male',
                'status'            => ACTIVE,
                'remember_token'    => Str::random(60),
                'phone'             => '012345678910',
                'date_of_birth'     => '2000-10-21',
                'agreed_terms'      => 1,
            ],
            [
                'uuid' => Str::uuid(),
                'first_name'        => 'Member',
                'last_name'         => 'Last',
                'email'             => 'member@app.com',
                'email_verified_at' => now(),
                'password'          => '$2y$10$mmv2lR.uMmhG.EC9FQEirO4YrLtjqATfmzDPwIPKLIDLSCNhPtVqu',   // 12345678
                'user_type'         => USER_TYPE_MEMBER,
                'gender'            => 'male',
                'status'            => ACTIVE,
                'remember_token'    => Str::random(60),
                'phone'             => '012345678910',
                'date_of_birth'     => '2000-10-21',
                'agreed_terms'      => 1,
            ],
            [
                'uuid' => Str::uuid(),
                'first_name'        => 'Teacher',
                'last_name'         => 'Last',
                'email'             => 'teacher@app.com',
                'email_verified_at' => now(),
                'password'          => '$2y$10$mmv2lR.uMmhG.EC9FQEirO4YrLtjqATfmzDPwIPKLIDLSCNhPtVqu',   // 12345678
                'user_type'         => USER_TYPE_TEACHER,
                'gender'            => 'male',
                'status'            => ACTIVE,
                'remember_token'    => Str::random(60),
                'phone'             => '012345678910',
                'date_of_birth'     => '2000-10-21',
                'agreed_terms'      => 1,
            ],
            [
                'uuid' => Str::uuid(),
                'first_name'        => 'Student',
                'last_name'         => 'Last',
                'email'             => 'student@app.com',
                'email_verified_at' => now(),
                'password'          => '$2y$10$mmv2lR.uMmhG.EC9FQEirO4YrLtjqATfmzDPwIPKLIDLSCNhPtVqu',   // 12345678
                'user_type'         => USER_TYPE_STUDENT,
                'gender'            => 'male',
                'status'            => ACTIVE,
                'remember_token'    => Str::random(60),
                'phone'             => '012345678910',
                'date_of_birth'     => '2000-10-21',
                'agreed_terms'      => 1,
            ],
        ];


        foreach ($users as $user) {
            User::create($user);
        }
    }
}
