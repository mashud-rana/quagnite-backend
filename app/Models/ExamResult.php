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

    public const VIDEO_PATH='exam_results/videos';

    protected $appends = ['full_video_url'];

    protected $casts = [
        'results' => 'array',
    ];


    public function getFullVideoUrlAttribute()
    {
        return $this->video_url ? getStoreFile($this->video_url, 'public') : null;
    }

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
