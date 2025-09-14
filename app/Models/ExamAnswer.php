<?php

namespace App\Models;

use App\Traits\ModelBootHandler;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamAnswer extends Model
{
    use HasFactory,ModelBootHandler;

    protected $fillable = [
        'student_id',
        'exam_id',
        'course_id',
        'question_id',
        'answer',
        'answer_true_false',
        'obtained_mark',
        //'obtained_grade',
        //'obtained_gpa',
    ];
}
