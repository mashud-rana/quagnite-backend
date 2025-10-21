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
        $resource_data = [
            "id" => $this->id,
            "uuid" => $this->uuid,
            "title" => $this->title,
            "slug" => $this->slug,
            "price" => $this->price,
            "old_price" => $this->old_price,
            "image" => $this->image ? getStoreFile($this->image, $this->storage_type) : null,
            "duration" => $this->duration,
            "pass_mark" => $this->pass_mark,
            "description" => $this->description,
            'status' => $this->status == ACTIVE ? 'Active' : 'Inactive',

        ];
        if ($this->relationLoaded('questions') && $this->questions) {
            $questions = $this->whenLoaded('questions');
            $resource_data['questions'] = QuestionResource::collection($questions);
        }
        return $resource_data;
    }
}
