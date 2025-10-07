<?php

namespace App\Http\Resources\Api\V1\Student\Ebook;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Api\V1\Student\StudentResource;
use App\Http\Resources\Api\V1\Student\Bootcamp\BootcampsResource;

class EnrolledEbookResource extends JsonResource
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
            'status' => $this->status == PENDING ? 'Pending' : ($this->status == INPROGRESS ? 'In Progress' : 'Complete'),

        ];
        // dd($this->student);
        if ($this->relationLoaded('student') && $this->student) {
            $student = $this->whenLoaded('student');
            $resourceData['student'] = new StudentResource($student);
        }
        if ($this->relationLoaded('ebook') && $this->ebook) {
            $ebook = $this->whenLoaded('ebook');
            $resourceData['ebook'] = new EbookResource($ebook);
        }
        return $resourceData;

    }
}
