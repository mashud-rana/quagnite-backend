<?php

namespace App\Http\Resources\Api\V1\Teacher\Bootcamp;

use Illuminate\Http\Resources\Json\JsonResource;

class BootcampResource extends JsonResource
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
            'id' => $this->id,
            'uuid' => $this->uuid,
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'slug' => $this->slug,
            'description' => $this->description,
            'bootcamp_category_id' => $this->bootcamp_category_id,
            'bootcamp_announcement_id' => $this->bootcamp_announcement_id,
            'course_language_id' => $this->course_language_id,
            'difficulty_level_id' => $this->difficulty_level_id,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'price' => $this->price,
            'old_price' => $this->old_price,
            'learner_accessibility' => $this->learner_accessibility,
            "image" => $this->image ? getStoreFile($this->image, $this->storage_type) : null,
            "video" => $this->video ? getStoreFile($this->video, $this->storage_type) : null,
            'video_link' => $this->video_link,
            'access_period' => $this->access_period,
            'status' => $this->status
        ];
    }
}
