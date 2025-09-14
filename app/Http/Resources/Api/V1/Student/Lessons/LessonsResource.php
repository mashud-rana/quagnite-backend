<?php

namespace App\Http\Resources\Api\V1\Student\Lessons;


use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Api\V1\Student\Lecture\LectureResource;
use App\Http\Resources\Api\V1\Student\Teacher\TeacherResource;

class LessonsResource extends JsonResource
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
            'file_duration' =>  $this->lecture_sum_file_duration_second ? gmdate('i:s', $this->lecture_sum_file_duration_second) : 0.00,
        ];
        if(isset($this->lecture_count)){
            $resource_data['lecture_count'] = $this->lecture_count;
        }
        if(isset($this->questions_count)){
            $resource_data['questions_count'] = $this->questions_count;
        }
        if ($this->relationLoaded('lecture') && $this->lecture) {
            $lectures = $this->whenLoaded('lecture');
            $resource_data['lectures'] = LectureResource::collection($lectures);
        }
        return $resource_data;

    }
}
