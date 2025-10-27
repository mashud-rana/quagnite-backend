<?php

namespace App\Http\Resources\Api\V1\Student;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\Api\V1\Student\Exam\ExamResource;
use App\Http\Resources\Api\V1\Student\User\UserResource;

class EnrollResultResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

       $resourceData= [
            'id' => $this->id,
            'exam_id' => $this->exam_id,
            'score' => $this->score,
            'correct_ans' => $this->correct_ans,
            'wrong_ans' => $this->wrong_ans,
            'total_qus' => $this->total_qus,
            'is_passed' => $this->is_passed,

        ];
        if ($this->relationLoaded('student') && $this->student) {
            $student = $this->whenLoaded('student');
            $resourceData['student'] = new StudentResource($student);
        }
        if ($this->relationLoaded('exam') && $this->exam) {
            $exam = $this->whenLoaded('exam');
            // dd($exam);
            $resourceData['exam'] = new ExamResource($exam);
        }

        return $resourceData;

    }
}
