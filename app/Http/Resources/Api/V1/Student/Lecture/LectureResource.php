<?php

namespace App\Http\Resources\Api\V1\Student\Lecture;


use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Api\V1\Student\Teacher\TeacherResource;

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


        $resource_data = [
            'id' => $this->id,
            'uuid' => $this->uuid,
            'title' => $this->title,
            'lecture_format' => $this->lecture_format,
            'video_url' => getStoreFile($this->video_path, $this->storage_type),
            'vimeo_url' => "https://player.vimeo.com/video/". $this->vimeo_path ."?badge=0&amp;autopause=0&amp;player_id=0&amp;",
            'pdf_url' =>  getStoreFile($this->pdf_path, $this->storage_type),
            'slide_url' =>  "https://view.officeapps.live.com/op/embed.aspx?src=". getStoreFile($this->slide_path, $this->storage_type),
            'image_url' => getStoreFile($this->image_path, $this->storage_type),
            'audio_url' => getStoreFile($this->audio_path, $this->storage_type),
            'file_size' => $this->file_size,
            'file_duration' => $this->file_duration,
            'file_duration_second' => $this->file_duration_second,
            'minutes' => $this->minutes,
            'seconds' => $this->seconds,
            'completed' => $this->users->contains(auth()->user()) && $this->users->find(auth()->user())->pivot->completed,
            'file_duration_formatted' =>  !empty($this->file_duration_second)  && !is_null($this->file_duration_second) && $this->lecture_format == LECTURE_FORMAT_VIDEO  ? gmdate('i:s', $this->file_duration_second) : '0.00',

        ];


        return $resource_data;

    }
}
