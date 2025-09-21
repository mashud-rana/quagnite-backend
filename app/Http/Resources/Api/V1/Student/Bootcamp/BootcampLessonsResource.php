<?php

namespace App\Http\Resources\Api\V1\Student\Bootcamp;


use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Api\V1\Student\Lecture\LectureResource;
use App\Http\Resources\Api\V1\Student\Teacher\TeacherResource;
use App\Http\Resources\Api\V1\Student\Bootcamp\BootcampLectureResource;

class BootcampLessonsResource extends JsonResource
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

        ];

        if ($this->relationLoaded('lecture') && $this->lecture) {
            $lectures = $this->whenLoaded('lecture');
            $resource_data['lectures'] = BootcampLectureResource::collection($lectures);
        }
        return $resource_data;

    }
}
