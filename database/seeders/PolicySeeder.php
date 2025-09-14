<?php

namespace Database\Seeders;

use App\Models\Policy;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PolicySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 1; $i < 5; $i++) {

            $paragraph = '';
            $paras = rand(3, 7);
            for ($x = 0; $x <= $paras; $x++) {
                $words = rand(80, 170);
                $paragraph .= '<p>' . $faker->sentence($words) . '</p>';
            }

            Policy::create([
                'type' => $i,
                'description' => $paragraph,
            ]);
        }
    }
}
