<?php

namespace App\Http\Resources\Api\V1\Student\Bootcamp;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Api\V1\Student\StudentResource;
use App\Http\Resources\Api\V1\Student\Bootcamp\BootcampsResource;

class EnrolledBootcampsResource extends JsonResource
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
            'bootcamp_image' => getStoreFile($this->bootcamp->image, $this->bootcamp->storage_type),
            'status' => $this->status == PENDING ? 'Pending' : ($this->status == INPROGRESS ? 'In Progress' : 'Complete'),
            "is_refund_valid" => $this->is_refund_valid,
        ];
        // dd($this->student);
        if ($this->relationLoaded('student') && $this->student) {
            $student = $this->whenLoaded('student');
            $resourceData['student'] = new StudentResource($student);
        }
        if ($this->relationLoaded('bootcamp') && $this->bootcamp) {
            $bootcamp = $this->whenLoaded('bootcamp');
            $resourceData['bootcamp'] = new BootcampsResource($bootcamp);
        }
        return $resourceData;

    }
}
