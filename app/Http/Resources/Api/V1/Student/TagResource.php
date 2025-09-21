<?php

namespace App\Http\Resources\Api\V1\Student;


use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Api\V1\Student\Lecture\LectureResource;
use App\Http\Resources\Api\V1\Student\Teacher\TeacherResource;

class TagResource extends JsonResource
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
            'tag_name' => $this->tag?->name,
            'tag_slug' => $this->tag?->slug,
            'tag_status' => $this->tag?->status == ACTIVE ? 'Active' : 'Inactive',


        ];

        return $resource_data;

    }
}
