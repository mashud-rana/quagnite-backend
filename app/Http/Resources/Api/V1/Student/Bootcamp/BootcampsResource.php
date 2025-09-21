<?php

namespace App\Http\Resources\Api\V1\Student\Bootcamp;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Api\V1\Student\StudentResource;

class BootcampsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        $resourceData = [
            'id' => $this->id,
            'uuid' => $this->uuid,
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'slug' => $this->slug,
            'description' => $this->description,
            'feature_details' => $this->feature_details,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'formatted_start_date' => Carbon::parse($this->start_date)->format('d M, Y'),
            'formatted_end_date' => Carbon::parse($this->end_date)->format('d M, Y'),
            'price' => $this->price,
            'old_price' => $this->old_price,
            'learner_accessibility' => $this->learner_accessibility,

        ];

        return $resourceData;

    }
}
