<?php

namespace App\Http\Resources\Api\V1\Teacher\CourseDifficulty;

use Illuminate\Http\Resources\Json\JsonResource;

class CourseDifficultyResource extends JsonResource
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
            'title' => $this->title
        ];
    }
}
