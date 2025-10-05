<?php

namespace App\Http\Resources\Api\V1\Student\Bootcamp;


use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Api\V1\Student\TagResource;
use App\Http\Resources\Api\V1\Student\StudentResource;
use App\Http\Resources\Api\V1\Student\CategoryResource;
use App\Http\Resources\Api\V1\Student\Review\ReviewResource;
use App\Http\Resources\Api\V1\Student\Teacher\TeacherResource;
use App\Http\Resources\Api\V1\Student\Course\CourseNoteResource;
use App\Http\Resources\Api\V1\Student\Difficulty\DifficultyResource;
use App\Http\Resources\Api\V1\Student\Discussions\DiscussionsResource;
use App\Http\Resources\Api\V1\Student\Bootcamp\BootcampLessonsResource;

class BootcampsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        $resource_data = [
            'id' => $this->id,
            'uuid' => $this->uuid,
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'slug' => $this->slug,
            'description' => $this->description,
            'feature_details' => $this->feature_details,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'formatted_start_date' => Carbon::parse($this->start_date)->format('d M, Y'),
            'formatted_end_date' => Carbon::parse($this->end_date)->format('d M, Y'),
            'price' => $this->price,
            'old_price' => $this->old_price,
            'learner_accessibility' => $this->learner_accessibility,
            'image_url' => getStoreFile($this->image, $this->storage_type),
            'storage_type' => $this->storage_type,
            'video' => $this->video,
            'video_link' => $this->video_link,
            'intro_video_check' => $this->intro_video_check,
            'access_period' => $this->access_period,
            'status' => $this->status == APPROVED ? 'Approved' : ($this->status == PENDING ? 'Pending' : (
                $this->status == WAITING ? 'Waiting' : ($this->status == HOLD ? 'Hold' : 'Rejected')
            )),
            'average_rating' => $this->average_rating,
            'total_review' => $this->total_review,
            'total_enrolled_students' => $this->total_enrolled_students,
            'enrolled_students' => $this->enrolled_students,

        ];
        if ($this->relationLoaded('user') && $this->user) {
            $user = $this->whenLoaded('user');
            $resource_data['teacher'] = new TeacherResource($user);
        }

        if ($this->resource->relationLoaded('reviews') && $this->reviews) {
            $reviews = $this->reviews;

            $resource_data['review_data'] = prepareReviewData($reviews);
            $resource_data['reviews'] = ReviewResource::collection($reviews);

        }

        if ($this->relationLoaded('notes') && $this->notes) {
            $notes = $this->whenLoaded('notes');
            $resource_data['notes'] = CourseNoteResource::collection($notes);
        }

        if ($this->relationLoaded('lessons') && $this->lessons) {
            $lessons = $this->whenLoaded('lessons');
            $resource_data['lessons'] = BootcampLessonsResource::collection($lessons);
        }

        if ($this->relationLoaded('tags') && $this->tags) {
            $tags = $this->whenLoaded('tags');
            $resource_data['tags'] = TagResource::collection($tags);
        }

        if ($this->relationLoaded('discussions') && $this->discussions) {
            $discussions = $this->whenLoaded('discussions');
            $resource_data['discussions'] = DiscussionsResource::collection($discussions);
        }

        if ($this->relationLoaded('difficulty') && $this->difficulty) {
            $difficulty = $this->whenLoaded('difficulty');
            $resource_data['difficulty'] = new DifficultyResource($difficulty);
        }
         if ($this->relationLoaded('category')) {
            $category = $this->whenLoaded('category');

            $resource_data['category'] = new CategoryResource($category);
        }
        return $resource_data;

    }
}
