<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Traits\ModelBootHandler;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory, ModelBootHandler, SoftDeletes;

    protected $guarded = ['id'];


    public static function generateUniqueStudentCode()
    {
        do {
            $studentCode = \Illuminate\Support\Str::upper(\Illuminate\Support\Str::random(10));
        } while (self::where('student_code', $studentCode)->exists());

        return $studentCode;
    }


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopePending($query)
    {
        return $query->where('status', PENDING);
    }

    public function scopeApproved($query)
    {
        return $query->where('status', APPROVED);
    }

    public function scopeBlocked($query)
    {
        return $query->where('status', BLOCK);
    }

    public function coachEnrollments()
    {
        return $this->hasMany(EnrollCoach::class, 'student_id');
    }

    public function courseEnrollments()
    {
        return $this->hasMany(EnrollCourse::class, 'user_id', 'user_id');
    }

    public function bootcampEnrollments()
    {
        return $this->hasMany(EnrollBootcamp::class, 'user_id', 'user_id');
    }

    public function getCourseCompletedCountAttribute()
    {
        if (! $this->relationLoaded('courseEnrollments')) {
            $this->load('courseEnrollments');
        }

        return $this->getRelation('courseEnrollments')->where('status', COMPLETE)->count();
    }

    public function getCourseProgressCountAttribute()
    {
        if (! $this->relationLoaded('courseEnrollments')) {
            $this->load('courseEnrollments');
        }

        return $this->getRelation('courseEnrollments')->where('status', INPROGRESS)->count();
    }

    public function getBootcampCompletedCountAttribute()
    {
        if (! $this->relationLoaded('bootcampEnrollments')) {
            $this->load('bootcampEnrollments');
        }

        return $this->getRelation('bootcampEnrollments')->where('status', COMPLETE)->count();
    }

    public function getBootcampProgressCountAttribute()
    {
        if (! $this->relationLoaded('bootcampEnrollments')) {
            $this->load('bootcampEnrollments');
        }

        return $this->getRelation('bootcampEnrollments')->where('status', INPROGRESS)->count();
    }

    public static function boot()
    {
        parent::boot();

        static::enableUuidBootHandler();


        // 👉 If you had other boot logic before, keep it here too

        // Before create
        static::creating(function ($student) {
            if (empty($student->student_code)) {
                $student->student_code = self::generateUniqueStudentCode();
            }
        });

        // Before update
        // static::updating(function ($student) {
        //     dd('updating');
        //     if (empty($student->student_code)) {
        //         $student->student_code = self::generateUniqueStudentCode();
        //     }
        // });
        static::saving(function ($student) {

            if (empty($student->student_code) || is_null($student->student_code)) {

                $student->student_code = self::generateUniqueStudentCode();
            }
        });
    }
}
