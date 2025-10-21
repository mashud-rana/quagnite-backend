<?php

namespace App\Http\Resources\Api\V1\Student\Exam;

use Illuminate\Http\Resources\Json\JsonResource;

class QuestionResource extends JsonResource
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
            'title' => $this->title,
            'answer' => $this->answer,
            'hint' => $this->hint,
            'explanation' => $this->explanation,

        ];

        if ($this->relationLoaded('options') && $this->options) {
            $options = $this->whenLoaded('options');
            $resource_data['options'] = OptionResource::collection($options);
        }
    return $resource_data;
    }
}
