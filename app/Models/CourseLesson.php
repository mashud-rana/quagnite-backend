<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Constants\GlobalConstant;
use App\Traits\ModelBootHandler;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CourseLesson extends Model
{
    use HasFactory, ModelBootHandler;

    protected $guarded = ['id',];

    public function users()
    {
        return $this->belongsToMany(User::class, 'lecture_user', 'lesson_id', 'user_id')
            ->withPivot('completed')
            ->withTimestamps();
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function lecture()
    {
        return $this->hasMany(CourseLecture::class, 'course_lesson_id');
    }

    public function questions()
    {
        return $this->morphMany(Question::class, 'questionable');
    }
    public function getTotalDurationAttribute()
    {
        $totalSeconds = CourseLecture::getTotalDurationForLesson($this->id);

        // Calculate hours, minutes, and seconds
        $hours = floor($totalSeconds / 3600);
        $minutes = floor(($totalSeconds % 3600) / 60);
        $seconds = $totalSeconds % 60;

        // Format the result
        return sprintf('%02d:%02d:%02d', $hours, $minutes, $seconds);
    }
    public static function boot()
    {
        parent::boot();

        static::enableUuidBootHandler();
    }
}
