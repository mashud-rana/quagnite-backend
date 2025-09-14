<?php

namespace App\Models;

use App\Traits\ModelBootHandler;
use App\Models\PlaygroundCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Playground extends Model
{
    use HasFactory, SoftDeletes, ModelBootHandler;

    protected $guarded = ['id',];

    public function category()
    {
        return $this->belongsTo(PlaygroundCategory::class, 'playground_category_id');
    }

    public function questions()
    {
        return $this->morphMany(Question::class, 'questionable');
    }

    public function scopeActive($query)
    {
        return $query->where('status', ACTIVE);
    }

    public static function boot()
    {
        parent::boot();

        static::enableSlugBootHandler();
        static::enableStorageTypeBootHandler();
    }
}
