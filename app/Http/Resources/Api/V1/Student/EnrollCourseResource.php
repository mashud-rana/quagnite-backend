<?php

namespace App\Http\Resources\Api\V1\Student;

use Illuminate\Http\Resources\Json\JsonResource;

class EnrollCourseResource extends JsonResource
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
            'course_image' =>getStoreFile($this->course->image, $this->course->storage_type) ,
            'course_slug' => $this->course?->slug,
            'course_title' => $this->course?->title,
            'course_subtitle' => $this->course?->subtitle,
            'course_description' => $this->course?->description,
            'course_difficulty' => $this->course?->difficulty?->title,
            'course_duration' => formatLectureDuration($this->course?->lectures),
            'enroll_date' => $this->created_at?->format('d M, Y'),
            'status' => $this->status == INPROGRESS ? 'In Progress' : 'Completed',
            'total_lectures' => $this->course?->lectures?->count(),
            'completed_percentage' => $this->completionPercentage,
            'enrolled_at' => formatDate($this->created_at),
            'course_review' => $this->course?->reviews && $this->course?->reviews?->count() > 0 ? [
                'average_rating' => $this->course?->reviews?->avg('rating'),
                'total_review' => $this->course?->reviews?->count(),
            ] : null,
        ];

    }
}
