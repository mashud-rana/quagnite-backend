<?php

namespace App\Http\Resources\Api\V1\Student\Teacher;


use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Api\V1\Student\Teacher\TeacherCategoryResource;

class TeacherDetailsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // dd('TeacherDetailsResource',$this->all());
        $resource_data = [
            'id' => $this->id,
            'uuid' => $this->uuid,
            'professional_title' => $this->professional_title,
            'postal_code' => $this->postal_code,
            'address' => $this->address,
            'about_me' => $this->about_me,
            'social_link' => $this->social_link,
            'hourly_rate' => $this->hourly_rate,
            'hourly_old_rate' => $this->hourly_old_rate,
            'cv' => $this->cv,
            'status' => $this->status == APPROVED ? 'Approved' : 'Unapproved',

        ];

        if ($this->relationLoaded('teacher_category') && $this->teacher_category) {
            $teacher_category = $this->whenLoaded('teacher_category');
            $resource_data['teacher_category'] = new TeacherCategoryResource($teacher_category);
        }

        return $resource_data;
    }
}
