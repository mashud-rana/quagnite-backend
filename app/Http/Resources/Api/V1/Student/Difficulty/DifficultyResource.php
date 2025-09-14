<?php

namespace App\Http\Resources\Api\V1\Student\Difficulty;


use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Api\V1\Student\Lecture\LectureResource;
use App\Http\Resources\Api\V1\Student\Teacher\TeacherResource;

class DifficultyResource extends JsonResource
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

        ];

        return $resource_data;

    }
}
