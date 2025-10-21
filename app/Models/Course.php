<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use App\Traits\ModelBootHandler;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Course extends Model
{
    use HasFactory, ModelBootHandler, Searchable, SoftDeletes;

    protected $guarded = ['id'];

    protected $appends = [
        'average_rating',
        'total_review',
        'total_enrolled_students',
    ];

    public function lessons()
    {
        return $this->hasMany(CourseLesson::class);
    }

    public function lectures()
    {
        return $this->hasMany(CourseLecture::class);
    }

    public function category()
    {
        return $this->belongsTo(
            CourseCategory::class,
            'course_category_id',
            'id'
        );
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function users()
    {
        return $this->belongsToMany(
            User::class,
            'lecture_user',
            'course_id',
            'user_id'
        )
            ->withPivot('completed')
            ->withTimestamps();
    }

    public function difficulty()
    {
        return $this->belongsTo(
            DifficultyLevel::class,
            'difficulty_level_id',
            'id'
        );
    }

    public function language()
    {
        return $this->belongsTo(
            CourseLanguage::class,
            'course_language_id',
            'id'
        );
    }

    public function tags()
    {
        return $this->hasMany(CourseTag::class);
    }

    public function benefits()
    {
        return $this->hasMany(BenefitCourse::class);
    }

      public function course_tags(): HasManyThrough
    {
        return $this->hasManyThrough(
            Tag::class,
            CourseTag::class,
            'course_id', // Foreign key on the environments table...
            'id', // Foreign key on the deployments table...
            'id', // Local key on the applications table...
            'tag_id' // Local key on the environments table...
        );
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

    public function enrolledStudents()
    {
        return $this->hasMany(EnrollCourse::class, 'course_id');
    }

    public function course_notes()
    {
        return $this->hasMany(CourseNote::class, 'course_id');
    }

    public function toSearchableArray()
    {
        return [
            'title' => $this->title,
        ];
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

    public static function boot()
    {
        parent::boot();

        static::enableUuidBootHandler();
        static::enableSlugBootHandler();
        static::enableStorageTypeBootHandler();
    }
}
