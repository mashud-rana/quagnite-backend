<?php

namespace App\Models;

use App\Traits\ModelBootHandler;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ApiPlan extends Model
{
    use HasFactory, ModelBootHandler, SoftDeletes;

    protected $guarded = ['id'];

    public function scopeActive($query)
    {
        return $query->where('status', ACTIVE);
    }

    public function reviews()
    {
        return $this->morphMany(Review::class, 'reviewable');
    }

    public function averageRating()
    {
        return $this->reviews()->avg('rating');
    }

    public function totalReviews()
    {
        return $this->reviews()->count();
    }

    public static function boot()
    {
        parent::boot();

        static::enableCreatedUpdatedBootHandler();
    }
}
