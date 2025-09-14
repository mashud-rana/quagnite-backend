<?php

namespace App\Models;

use App\Traits\ModelBootHandler;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class Ebook extends Model
{
    use HasFactory, ModelBootHandler, Searchable, SoftDeletes;

    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(EbookCategory::class, 'ebook_category_id', 'id');
    }

    public function scopePublished($query)
    {
        return $query->whereStatus(PUBLISHED);
    }

    public function scopeUpcoming($query)
    {
        return $query->whereStatus(UPCOMING);
    }

    public function reviewer()
    {
        return $this->belongsTo(User::class, 'reviewer_id');
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
