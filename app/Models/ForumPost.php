<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Constants\GlobalConstant;
use App\Traits\ModelBootHandler;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class ForumPost extends Model
{
    use HasFactory, Searchable, SoftDeletes, ModelBootHandler;

    protected $guarded = ['id',];

    public function scopeActive($query)
    {
        return $query->where('status', ACTIVE);
    }

    public function forumCategory()
    {
        return $this->belongsTo(ForumCategory::class);
    }

    public function comments()
    {
        return $this->hasMany(ForumPostComment::class)->whereNull('parent_id');
    }

    public function votes()
    {
        return $this->hasMany(ForumVote::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
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
    }
}
