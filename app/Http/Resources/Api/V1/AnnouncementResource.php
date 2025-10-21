<?php

namespace App\Http\Resources\Api\V1;

use App\Http\Resources\Api\V1\UserResource;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Api\V1\Student\StudentInfoResource;

class AnnouncementResource extends JsonResource
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
            'title' => $this->title,
            'slug' => $this->slug,
            'description' => $this->description,
            'formatted_date' => custom_date($this->created_at),
            'read_at' => null
        ];
         if ($this->relationLoaded('myself_read')) {
            $readable = $this->myself_read?->readable;
            $resourceData['read_at'] = $this->myself_read?->read_at ?? null;
            $resourceData['myself_read'] = $readable ? new UserResource($readable) : null;
        }
        return $resourceData;

    }
}
