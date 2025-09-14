<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Support\Str;
use App\Models\CourseLesson;
use App\Constants\GlobalConstant;
use App\Models\CourseLecture;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CourseLecture>
 */
class CourseLectureFactory extends Factory
{
    protected $model = CourseLecture::class;

    public function definition()
    {
        $title = $this->faker->sentence;
        $courseId = Course::inRandomOrder()->first()->id;
        $lessonId = CourseLesson::inRandomOrder()->first()->id;

        return [
            'uuid' => Str::uuid(),
            'course_id' => $courseId ,
            'course_lesson_id' => $lessonId,
            'title' => $title,
            'lecture_type' => $this->faker->randomElement([1, 2]),
            'lecture_format' => $this->faker->randomElement(GlobalConstant::allowedLectureFormat()),
            'video_path' => $this->faker->url,
            'vimeo_path' => $this->faker->url,
            'image_path' => $this->faker->imageUrl(),
            'pdf_path' => $this->faker->fileExtension,
            'slide_path' => $this->faker->url,
            'audio_path' => $this->faker->url,
            'file_path' => $this->faker->filePath,
            'file_size' => $this->faker->randomNumber,
            'file_duration' => $this->faker->time,
            'file_duration_second' => $this->faker->randomNumber,
        ];
    }
}
