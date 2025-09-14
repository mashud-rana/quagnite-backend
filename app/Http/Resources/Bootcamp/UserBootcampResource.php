<?php

namespace App\Http\Resources\Bootcamp;

use Illuminate\Http\Resources\Json\JsonResource;

class UserBootcampResource extends JsonResource
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
            'full_name' => $this->full_name,
            'avatar' => $this->avatar ? getStoreFile($this->avatar, $this->storage_type) : null,
        ];
    }
}
