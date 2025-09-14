<?php

namespace App\Http\Resources\Api\V1\Student\Course;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Api\V1\Student\Review\ReviewResource;
use App\Http\Resources\Api\V1\Student\Lessons\LessonsResource;
use App\Http\Resources\Api\V1\Student\Teacher\TeacherResource;
use App\Http\Resources\Api\V1\Student\Language\LanguageResource;
use App\Http\Resources\Api\V1\Student\CourseTag\CourseTagResource;
use App\Http\Resources\Api\V1\Student\Difficulty\DifficultyResource;
use App\Http\Resources\Api\V1\Student\Discussions\DiscussionsResource;
use App\Http\Resources\Api\V1\Student\CourseCategory\CourseCategoryResource;


class CourseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // dd($this->all());
        $resource_data = [
            'id' => $this->id,
            'uuid' => $this->uuid,
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'slug' => $this->slug,
            'description' => $this->description,
            'price' => $this->price,
            'old_price' => $this->old_price,
            'image_url' => getStoreFile($this->image, $this->storage_type),

        ];

        if ($this->relationLoaded('course_notes') && $this->course_notes) {
            $course_notes = $this->whenLoaded('course_notes');
            $resource_data['course_notes'] = CourseNoteResource::collection($course_notes);
        }
        if ($this->relationLoaded('discussions') && $this->discussions) {
            $discussions = $this->whenLoaded('discussions');
            $resource_data['discussions'] = DiscussionsResource::collection($discussions);
        }

        if ($this->relationLoaded('reviews') && $this->reviews) {
            $reviews = $this->whenLoaded('reviews');
            $resource_data['review_data']['is_reviewed'] = $reviews->where('user_id', auth()->id())->exists() ? true : false;
            $resource_data['review_data']['average_rating'] = round($reviews->avg('rating'), 1);
            $resource_data['review_data']['reviews_count'] = $reviews->count();

            $ratingsCount = $reviews->groupBy('rating')
                ->map(function ($group) {
                    return $group->count();
                });
            $resource_data['review_data']['ratingsCount'] = $ratingsCount;
            $resource_data['review_data']['percentageRatings'] = [];
            for ($i = 1; $i <= 5; $i++) {
                $percentage = $resource_data['review_data']['ratingsCount']->has($i) ? ($resource_data['review_data']['ratingsCount'][$i] / $resource_data['review_data']['reviews_count']) * 100 : 0;
                $resource_data['review_data']['percentageRatings'][$i] = (int) $percentage;
            }

            $resource_data['reviews'] = ReviewResource::collection($reviews);
        }
        if ($this->relationLoaded('course_tags') && $this->course_tags) {
            $course_tags = $this->whenLoaded('course_tags');
            $resource_data['course_tags'] = CourseTagResource::collection($course_tags);
        }
        if ($this->relationLoaded('category') && $this->category) {
            $category = $this->whenLoaded('category');
            $resource_data['category'] = new CourseCategoryResource($category);
        }
        if ($this->relationLoaded('language') && $this->language) {
            $language = $this->whenLoaded('language');
            $resource_data['language'] = new LanguageResource($language);
        }
        if ($this->relationLoaded('difficulty') && $this->difficulty) {
            $difficulty = $this->whenLoaded('difficulty');
            $resource_data['difficulty'] = new DifficultyResource($difficulty);
        }
        if ($this->relationLoaded('user') && $this->user) {
            $user = $this->whenLoaded('user');
            $resource_data['teacher'] = new TeacherResource($user);
        }
        if ($this->relationLoaded('lessons') && $this->lessons) {
            $lessons = $this->whenLoaded('lessons');
            $sum_duration = $lessons->sum('lecture_sum_file_duration_second');

            $resource_data['lessons_total_duration'] = totalSecToHourMin($sum_duration);
            $resource_data['lessons'] = LessonsResource::collection($lessons);
        }
        //
        return $resource_data;

    }
}
