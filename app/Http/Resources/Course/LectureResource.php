<?php

namespace App\Http\Resources\Course;

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
            "lecture_format" => $this->lecture_format,
            "vimeo_id" => $this->vimeo_path,
            "video_path" => $this->video_path ? getStoreFile($this->video_path) : null,
            "image_path" => $this->image_path ? getStoreFile($this->image_path) : null,
            "pdf_path" => $this->pdf_path ? getStoreFile($this->pdf_path) : null,
            "slide_path" => $this->slide_path ? getStoreFile($this->slide_path) : null,
            "file_path" => $this->file_path ? getStoreFile($this->file_path) : null,
            "file_duration_second" => $this->file_duration_second,
        ];
    }
}
