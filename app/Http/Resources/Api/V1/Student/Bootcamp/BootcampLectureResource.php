<?php

namespace App\Http\Resources\Api\V1\Student\Bootcamp;


use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Api\V1\Student\Teacher\TeacherResource;

class BootcampLectureResource extends JsonResource
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
            'description' => $this->description,
            'start_time' => $this->start_time,
            'duration' => $this->duration,
            'password' => $this->password,
            'meeting_id' => $this->meeting_id,
            'formatted_start_time' => Carbon::parse($this->start_time)->format('h:i A'),
            'formatted_start_date' => Carbon::parse($this->start_time)->format('d/m/Y'),



        ];
        $resource_data['lesson_duration_hours_minutes'] = totalSecToHourMin((float)$this->duration * 60,'h:i');
        $resource_data['lesson_duration_formatted'] = totalSecToHourMin((float)$this->duration * 60);

        return $resource_data;

    }
}
