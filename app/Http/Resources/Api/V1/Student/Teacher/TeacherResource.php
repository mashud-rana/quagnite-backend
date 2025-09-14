<?php

namespace App\Http\Resources\Api\V1\Student\Teacher;


use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Api\V1\Student\Teacher\TeacherDetailsResource;

class TeacherResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // dd($this->all());
        $resource_data = [
            'id' => $this->id,
            'uuid' => $this->uuid,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'full_name' => $this->full_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'date_of_birth' => $this->date_of_birth,
            'gender' => $this->gender,
            'agreed_terms' => $this->agreed_terms,
            'balance' => $this->balance,
            'status' => $this->status == ACTIVE ? 'active' : 'inactive',
            'messenger_color' => $this->messenger_color,
            'avatar_url' => $this->avatar_url,
            'since_from' => formatDate($this->created_at),

        ];
        if ($this->relationLoaded('teacher') && $this->teacher) {
            $teacher = $this->whenLoaded('teacher');
            $resource_data['teacher_details'] = new TeacherDetailsResource($teacher);
        }

        return $resource_data;

    }
}
