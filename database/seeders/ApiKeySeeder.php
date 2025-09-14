<?php

namespace Database\Seeders;

use App\Models\ApiKey;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ApiKeySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            ApiKey::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'api_key' => Str::random(40),
                'expire_time' => now()->addDays(14),
            ]);
        }
    }
}
