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
        return [
            'id' => $this->id,
            'title' => $this->title,
            'answer' => $this->answer,
            'hint' => $this->hint,
            'explanation' => $this->explanation,
            'options' => OptionResource::collection($this->whenLoaded('options')),
        ];
    }
}
