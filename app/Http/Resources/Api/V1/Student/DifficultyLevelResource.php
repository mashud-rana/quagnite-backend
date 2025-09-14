<?php

namespace App\Http\Resources\Api\V1\Student;

use Illuminate\Http\Resources\Json\JsonResource;

class DifficultyLevelResource extends JsonResource
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


        ];

    }
}
