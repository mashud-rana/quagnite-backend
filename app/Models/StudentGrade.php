<?php

namespace App\Models;

use App\Traits\ModelBootHandler;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentGrade extends Model
{
    use HasFactory, ModelBootHandler;

    protected $fillable = [
        'student_id',
        'exam_id',
        'obtained_total_mark',
        'obtained_total_grade',
        'obtained_total_gpa',
    ];
}
