<?php

namespace App\Http\Resources\Api\V1\Student\CourseTag;


use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Api\V1\Student\Lecture\LectureResource;
use App\Http\Resources\Api\V1\Student\Teacher\TeacherResource;

class CourseTagResource extends JsonResource
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
            'name' => $this->name,
            'slug' => $this->slug,
            'status' => $this->status == ACTIVE ? 'Active' : 'Inactive',
            'text' => $this->text,

        ];

        return $resource_data;

    }
}
