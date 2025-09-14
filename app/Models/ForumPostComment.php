<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Constants\GlobalConstant;
use App\Traits\ModelBootHandler;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class ForumPostComment extends Model
{
    use HasFactory, ModelBootHandler, SoftDeletes;

    protected $guarded = ['id',];

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function commentReplies()
    {
        return $this->hasMany(ForumPostComment::class, 'parent_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function boot()
    {
        parent::boot();

        static::enableUuidBootHandler();
    }
}
