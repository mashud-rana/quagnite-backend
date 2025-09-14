<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use App\Traits\ModelBootHandler;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Wiki extends Model
{
    use HasFactory, ModelBootHandler, Searchable, SoftDeletes;

    protected $guarded = ['id',];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(WikiCategory::class, 'wiki_category_id', 'id');
    }

    public function tags()
    {
        return $this->hasMany(WikiTag::class);
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
        static::enableStorageTypeBootHandler();
    }
}
