<?php

namespace App\Http\Resources\Bootcamp;

use Illuminate\Http\Resources\Json\JsonResource;

class LectureResource extends JsonResource
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
            "title" => $this->title,
            "description" => $this->description,
            "start_time" => $this->start_time,
            "duration" => $this->duration,
            "password" => $this->password,
            "meeting_id" => $this->meeting_id,
            "start_url" => $this->start_url,
            "join_url" => $this->join_url,
        ];
    }
}
