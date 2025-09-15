<?php

namespace App\Http\Resources\Api\V1\Student;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentInfoResource extends JsonResource
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
            'uuid' => $this->uuid,
            'student_code' => $this->student_code,
            'address' => $this->address,
            'about_me' => $this->about_me,
            'social_link' => $this->social_link,
            'slug' => $this->slug,
            'cv' => $this->cv,
            'status' => $this->status == ACTIVE ? 'Active' : 'Inactive',
            'subscription_type' => $this->subscription_type,
            'country' => $this->country,
            'state' => $this->state,


        ];

    }
}
