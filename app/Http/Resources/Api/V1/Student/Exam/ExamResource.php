<?php

namespace App\Http\Resources\Api\V1\Student\Exam;


use Illuminate\Http\Resources\Json\JsonResource;

class ExamResource extends JsonResource
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
            "uuid" => $this->uuid,
            "title" => $this->title,
            "image" => $this->image ? getStoreFile($this->image, $this->storage_type) : null,
            "price" => $this->price,
            "old_price" => $this->old_price,
            "description" => $this->description,
            "duration" => $this->duration,
            "pass_mark" => $this->pass_mark,
            "questions" => QuestionResource::collection($this->whenLoaded('questions')),
        ];
    }
}
