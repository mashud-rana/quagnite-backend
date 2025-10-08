<?php

namespace App\Http\Resources\Api\V1\Student\Ebook;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Api\V1\Student\StudentResource;
use App\Http\Resources\Api\V1\Student\CategoryResource;
use App\Http\Resources\Api\V1\Student\Teacher\TeacherResource;
use App\Http\Resources\Api\V1\Student\Bootcamp\BootcampsResource;
use App\Http\Resources\Api\V1\Student\Ebook\EnrolledEbookResource;

class EbookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
         $path = $this->ebook_file;
        $disk = config('settings.storage_driver');
        $resourceData = [
            'id' => $this->id,
            'uuid' => $this->uuid,
            'image_url' => getStoreFile($this->image, $this->storage_type),
            'title' => $this->title,
            'author_name' => $this->author_name,
            'slug' => $this->slug,
            'details' => $this->details,
            'price' => $this->price,
            'ebook_type' => $this->ebook_type,
            "ebook_file_url" => Storage::disk($disk)->url($path),
            'average_rating' => $this->average_rating,
            'status' => $this->status == APPROVED ? 'Approved' : ($this->status == PENDING ? 'Pending' : (
                $this->status == WAITING ? 'Waiting' : ($this->status == HOLD ? 'Hold' : 'Rejected')
            )),


        ];

        if ($this->relationLoaded('enroll_ebook') && $this->enroll_ebook) {
            $enroll_ebook = $this->whenLoaded('enroll_ebook');
            $resourceData['enroll_ebook'] = new EnrolledEbookResource($enroll_ebook);
        }
        if ($this->relationLoaded('user') && $this->user) {
            $user = $this->whenLoaded('user');
            $resourceData['teacher'] = new TeacherResource($user);
        }
         if ($this->relationLoaded('category')) {
            $category = $this->whenLoaded('category');

            $resourceData['category'] = new CategoryResource($category);
        }


        return $resourceData;

    }
}
