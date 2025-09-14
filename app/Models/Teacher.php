<?php

namespace App\Models;

use App\Traits\ModelBootHandler;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use HasFactory, SoftDeletes, ModelBootHandler;

    protected $guarded = ['id',];

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

    public function courses()
    {
        return $this->hasMany(Course::class, 'user_id', 'user_id');
    }

    public function teacher_category(){
        return $this->belongsTo(TeacherCategory::class, 'teacher_category_id', 'id');
    }



    public function coursesCount()
    {
        return $this->courses()->count();
    }

    public function enrollmentsCount($status = null)
    {
        $query = $this->courses()
            ->join(
                'enroll_courses',
                'courses.id',
                '=',
                'enroll_courses.course_id'
            );
        if ($status !== null) {
            $query->where('enroll_courses.status', $status);
        }

        return $query->count();
    }

    public function bootcamps()
    {
        return $this->hasMany(Bootcamp::class, 'user_id', 'user_id');
    }

    public function bootcampsCount()
    {
        return $this->bootcamps()->count();
    }

    public function bootcampEnrollmentsCount($status = null)
    {
        $query = $this->bootcamps()
            ->join(
                'enroll_bootcamps',
                'bootcamps.id',
                '=',
                'enroll_bootcamps.bootcamp_id'
            );

        if ($status !== null) {
            $query->where('enroll_bootcamps.status', $status);
        }

        return $query->count();
    }

    public function getTotalStudentsAttribute()
    {
        $courseEnrollmentsCount = $this->courses()
            ->join(
                'enroll_courses',
                'courses.id',
                '=',
                'enroll_courses.course_id'
            )
            ->where('courses.user_id', $this->user_id)
            ->count();

        $bootcampEnrollmentsCount = $this->bootcamps()
            ->join(
                'enroll_bootcamps',
                'bootcamps.id',
                '=',
                'enroll_bootcamps.bootcamp_id'
            )
            ->where('bootcamps.user_id', $this->user_id)
            ->count();

        return $courseEnrollmentsCount + $bootcampEnrollmentsCount;
    }

    public function getTotalEnrolledStudentsAttribute()
    {
        $enrollmentsCount = $this->enrollmentsCount(INPROGRESS);
        $bootcampEnrollmentsCount = $this->bootcampEnrollmentsCount(INPROGRESS);

        return $enrollmentsCount + $bootcampEnrollmentsCount;
    }

    public static function boot()
    {
        parent::boot();

        static::enableUuidBootHandler();
    }
}
