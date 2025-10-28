<?php

namespace App\Http\Resources\Api\V1\Student\Exam;


use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Api\V1\Student\Invoice\StudentCertificateResource;

class EnrollExamResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $resource_data= [
            "id" => $this->id,
            "uuid" => $this->uuid,
            "status" => $this->status == PENDING ? 'Pending' : 'Completed',
            'attempt' => $this->attempt,
            'formatted_created_at' => $this->created_at->format('d M Y'),
            'formatted_time' => $this->created_at->setTimezone(config('app.timezone'))->format('H:i A'),

        ];


         if ($this->relationLoaded('exam') && $this->exam) {
            $exam = $this->whenLoaded('exam');
            $resource_data['exam'] = new ExamResource($exam);
        }
        if ($this->relationLoaded('studentCertificate') && $this->studentCertificate) {
            $studentCertificate = $this->whenLoaded('studentCertificate');
            $resource_data['studentCertificate'] = new StudentCertificateResource($studentCertificate);
        }
        return $resource_data;
    }
}
