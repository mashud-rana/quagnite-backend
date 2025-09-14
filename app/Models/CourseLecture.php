<?php

namespace App\Models;

use App\Traits\ModelBootHandler;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseLecture extends Model
{
    use HasFactory, ModelBootHandler, SoftDeletes;

    protected $guarded = ['id'];

    // Other model properties and methods...
    protected $appends = ['minutes', 'seconds'];

    // Accessor for minutes
    public function getMinutesAttribute()
    {
        if (is_null($this->file_duration_second)) {
            return 0;
        }

        return floor($this->file_duration_second / 60);
    }

    // Accessor for seconds
    public function getSecondsAttribute()
    {
        if (is_null($this->file_duration_second)) {
            return 0;
        }

        return $this->file_duration_second % 60;
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'lecture_user', 'lecture_id', 'user_id')
            ->withPivot('completed')
            ->withTimestamps();
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function lesson()
    {
        return $this->belongsTo(CourseLesson::class);
    }

    public function getFormattedDurationAttribute()
    {
        $hours = floor($this->file_duration_second / 3600);
        $minutes = floor(($this->file_duration_second % 3600) / 60);
        $seconds = $this->file_duration_second % 60;

        return sprintf('%02d:%02d:%02d', $hours, $minutes, $seconds);
    }

    // Get total duration for all lectures in a lesson
    public static function getTotalDurationForLesson($lessonId)
    {
        return self::where('course_lesson_id', $lessonId)->sum('file_duration_second');
    }

    public static function boot()
    {
        parent::boot();

        static::enableUuidBootHandler();
    }
}
