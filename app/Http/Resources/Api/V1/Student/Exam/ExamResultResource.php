<?php

namespace App\Http\Resources\Api\V1\Student\Exam;


use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Api\V1\Student\StudentResource;

class ExamResultResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $resource_data = [
            "id" => $this->id,
            // "exam_id" => $this->exam_id,
            // "enroll_exam_id" => $this->enroll_exam_id,
            // "user_id" => $this->user_id,
            "score" => number_format($this->score, 2, '.', ''),
            "correct_ans" => $this->correct_ans,
            "wrong_ans" => $this->wrong_ans,
            "total_qus" => $this->total_qus,
            "is_passed" => $this->is_passed,
            "video_url" => $this->video_url,
            'exam_date' => formatDate($this->created_at, 'd M Y'),

        ];
        if ($this->relationLoaded('user') && $this->user) {
            $user = $this->whenLoaded('user');
            $resource_data['user'] = new StudentResource($user);
        }
         if ($this->relationLoaded('exam') && $this->exam) {
            $exam = $this->whenLoaded('exam');
            $resource_data['exam'] = new ExamResource($exam);
        }
        return $resource_data;
    }
}
