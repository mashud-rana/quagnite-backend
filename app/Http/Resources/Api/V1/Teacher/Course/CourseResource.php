<?php

namespace App\Http\Resources\Api\V1\Teacher\Course;

use App\Http\Resources\Course\LessonResource;
use App\Http\Resources\Course\UserCourseResource;
use Illuminate\Http\Resources\Json\JsonResource;

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
        return [
            "id" => $this->id,
            "uuid" => $this->uuid,
            "title" => $this->title,
            "subtitle" => $this->subtitle,
            "slug" => $this->subtitle,
            "description" => $this->description,
            "feature_details" => $this->feature_details,
            "price" => $this->price,
            "old_price" => $this->old_price,
            "learner_accessibility" => $this->learner_accessibility,
            "average_rating" => $this->average_rating,
            "promo_video_link" => $this->video_link,
            "image" => $this->image ? getStoreFile($this->image, $this->storage_type) : null,
            "video" => $this->video ? getStoreFile($this->video, $this->storage_type) : null,
            "user" => UserCourseResource::make($this->whenLoaded('user')),
            "lessons" => LessonResource::collection($this->whenLoaded('lessons')),
        ];
    }
}
