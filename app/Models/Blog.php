<?php

namespace App\Models;

use App\Traits\ModelBootHandler;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class Blog extends Model
{
    use HasFactory, ModelBootHandler, Searchable, SoftDeletes;

    protected $guarded = ['id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(BlogCategory::class, 'blog_category_id', 'id');
    }

    public function tags()
    {
        return $this->hasMany(BlogTag::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function scopeActive($query)
    {
        return $query->where('status', ACTIVE);
    }

    public function scopePublished($query)
    {
        return $query->where('status', PUBLISHED);
    }

    public function getImagePathAttribute()
    {
        return getStoreFile($this->image, $this->storage_type);
    }

    public function toSearchableArray()
    {
        return [
            'title' => $this->title,
        ];
    }

    public static function boot()
    {
        parent::boot();

        static::enableUuidBootHandler();
        static::enableSlugBootHandler();
        static::enableStorageTypeBootHandler();
    }
}
