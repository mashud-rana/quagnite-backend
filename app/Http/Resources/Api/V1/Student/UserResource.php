<?php

namespace App\Http\Resources\Api\V1\Student;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'first_name' => $this->first_name,
            'full_name' => $this->full_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'date_of_birth' => $this->date_of_birth,
            'avatar_url' => $this->avatar_url,
            'user_type' => $this->user_type,
            'gender' => $this->gender,
            'balance' => $this->balance,
            'status' => $this->status == ACTIVE ? 'Active' : 'Inactive',
            'address' => $this->student->address ?? null,
            'subscription_type' => $this->student->subscription_type ?? null,
            'country' => $this->student->country ?? null,
            'state' => $this->student->state ?? null,
            'about_me' => $this->student->about_me ?? null,
            'student_code' => $this->student->student_code ?? null,

        ];

    }
}
