<?php

namespace App\Http\Resources\Api\V1\Student\Invoice;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Api\V1\Student\StudentResource;
use App\Http\Resources\Api\V1\Student\CategoryResource;
use App\Http\Resources\Api\V1\Student\EnrollCourseResource;
use App\Http\Resources\Api\V1\Student\EnrollResultResource;
use App\Http\Resources\Api\V1\Student\Teacher\TeacherResource;
use App\Http\Resources\Api\V1\Student\Bootcamp\BootcampsResource;
use App\Http\Resources\Api\V1\Student\Ebook\EnrolledEbookResource;
use App\Http\Resources\Api\V1\Student\Invoice\InvoiceItemResource;

class StudentCertificateResource extends JsonResource
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
            'certificate_number' => $this->certificate_number,
            'date' => $this->created_at->format('d/m/Y'),

        ];

        if ($this->relationLoaded('certifiable') && $this->certifiable) {
            if($this->certifiable->course){
                $resourceData['certifiable'] = [
                    'type' => 'course',
                    'data' => new EnrollCourseResource($this->certifiable)
                ];
            }
             elseif($this->certifiable->exam){
                $resourceData['certifiable'] = [
                    'type' => 'exam',
                    'data' => new EnrollResultResource($this->certifiable)
                ];
            }

        }

        return $resourceData;

    }
}
