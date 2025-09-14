<?php

namespace App\Http\Resources\Api\V1\Student\Teacher;


use Illuminate\Http\Resources\Json\JsonResource;

class TeacherCategoryResource extends JsonResource
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
            'name' => $this->name,
            'slug' => $this->slug,
            'status' => $this->status == ACTIVE ? 'Active' : 'Inactive',

        ];

        return $resource_data;
    }
}
