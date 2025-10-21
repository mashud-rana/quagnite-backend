<?php

namespace App\Http\Resources\Api\V1\Student\Resume;

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

class ResumeResource extends JsonResource
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
            'title' => $this->title,
            'thumbnail' => asset('new-frontend/images/resume_thumb.png.jpg'),
            'file_url' => getStoreFile($this->file, 'public'),

        ];

        return $resourceData;

    }
}
