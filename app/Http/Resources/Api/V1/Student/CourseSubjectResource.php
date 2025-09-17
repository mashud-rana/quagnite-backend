<?php

namespace App\Http\Resources\Api\V1\Student;

use Illuminate\Http\Resources\Json\JsonResource;

class CourseSubjectResource extends JsonResource
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
            'id' => $this->course?->id,
            'course_title' => $this->course?->title,
            'course_subtitle' => $this->course?->subtitle,

        ];

    }
}
