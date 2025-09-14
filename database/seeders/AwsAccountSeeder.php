<?php

namespace Database\Seeders;

use App\Models\AwsAccount;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AwsAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $accounts = [
            [
                'acc_name'       => 'aws-playground-01',
                'acc_id'         => '617134080586',
                'acc_profile'    => 'profile_01',
                'user_group'     => 'Attendees',
            ],
            [
                'acc_name'       => 'aws-playground-02',
                'acc_id'         => '226820059721',
                'acc_profile'    => 'profile_02',
                'user_group'     => 'Attendees',
            ],
            [
                'acc_name'       => 'aws-playground-03',
                'acc_id'         => '988671995110',
                'acc_profile'    => 'profile_03',
                'user_group'     => 'Attendees',
            ],
            [
                'acc_name'       => 'aws-playground-04',
                'acc_id'         => '283719708126',
                'acc_profile'    => 'profile_04',
                'user_group'     => 'Attendees',
            ],
        ];

        foreach ($accounts as $account) {
            AwsAccount::create($account);
        }
    }
}
