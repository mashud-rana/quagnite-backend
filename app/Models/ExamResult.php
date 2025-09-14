<?php

namespace App\Models;

use App\Models\StudentCertificate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ExamResult extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id',];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }

    public function studentCertificate()
    {
        return $this->morphOne(StudentCertificate::class, 'certifiable');
    }
}
