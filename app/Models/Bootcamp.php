<?php

namespace App\Models;

use App\Traits\ModelBootHandler;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class Bootcamp extends Model
{
    use HasFactory, ModelBootHandler, Searchable, SoftDeletes;

    protected $guarded = ['id'];

    protected $dates = ['start_date', 'end_date'];

    protected $appends = [
        'average_rating',
        'total_review',
        'total_enrolled_students',
    ];

    public function lessons()
    {
        return $this->hasMany(BootcampLesson::class);
    }

    public function lectures()
    {
        return $this->hasMany(BootcampLecture::class);
    }

    public function getDurationMonthAttribute()
    {
        return $this->start_date->diffInMonths($this->end_date);
    }

    public function category()
    {
        return $this->belongsTo(BootcampCategory::class, 'bootcamp_category_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function difficulty()
    {
        return $this->belongsTo(DifficultyLevel::class, 'difficulty_level_id', 'id');
    }

    public function language()
    {
        return $this->belongsTo(CourseLanguage::class, 'course_language_id', 'id');
    }

    public function tags()
    {
        return $this->hasMany(BootcampTag::class);
    }

    public function reviews()
    {
        return $this->morphMany(Review::class, 'reviewable');
    }

    public function refunds()
    {
        return $this->morphMany(Refund::class, 'refundable');
    }

    public function averageRating()
    {
        return $this->reviews()->avg('rating');
    }

    public function totalReviews()
    {
        return $this->reviews()->count();
    }

    public function enrolledStudents()
    {
        return $this->hasMany(EnrollBootcamp::class, 'bootcamp_id');
    }

    public function discussions()
    {
        return $this->morphMany(Discussion::class, 'discussionable');
    }

    public function scopePending($query)
    {
        return $query->where('status', PENDING);
    }

    public function scopeApproved($query)
    {
        return $query->where('status', APPROVED);
    }

    public function scopeWaiting($query)
    {
        return $query->where('status', WAITING);
    }

    public function scopeHold($query)
    {
        return $query->where('status', HOLD);
    }

    // Accessor for average rating
    public function getAverageRatingAttribute()
    {
        if (! $this->relationLoaded('reviews')) {
            $this->load('reviews');
        }

        return $this->getRelation('reviews')->avg('rating');
    }

    public function getTotalReviewAttribute()
    {
        if (! $this->relationLoaded('reviews')) {
            $this->load('reviews');
        }

        return $this->getRelation('reviews')->count();
    }

    public function getTotalEnrolledStudentsAttribute()
    {
        if (! $this->relationLoaded('enrolledStudents')) {
            $this->load('enrolledStudents');
        }

        return $this->getRelation('enrolledStudents')->count();
    }

    public function notes()
    {
        return $this->hasMany(BootcampNote::class, 'bootcamp_id');
    }

    public static function boot()
    {
        parent::boot();

        static::enableUuidBootHandler();
        static::enableSlugBootHandler();
        static::enableStorageTypeBootHandler();
    }
}
