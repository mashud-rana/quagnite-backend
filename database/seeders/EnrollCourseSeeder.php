<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\EnrollCourse;
use Illuminate\Database\Seeder;
use App\Constants\GlobalConstant;
use App\Models\Course;
use App\Models\SubscriptionList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EnrollCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'student@app.com')->first();

        for ($i = 0; $i < 5; $i++) {
            EnrollCourse::create([
                'user_id' => $user->id,
                'course_id' => Course::inRandomOrder()->value('id'),
                'subscription_list_id' => SubscriptionList::where('user_id', $user->id)->first()->id,
            ]);
        }
    }
}
