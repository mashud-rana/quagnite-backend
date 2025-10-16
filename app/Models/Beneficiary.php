<?php

namespace App\Models;

use App\Traits\ModelBootHandler;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Beneficiary extends Model
{
    use HasFactory, ModelBootHandler, SoftDeletes;

    protected $guarded = ['id',];

    protected $appends = ['image_url'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

     public function getImageUrlAttribute()
    {
        return getStoreFile($this->image, 'public');
    }

    public static function boot()
    {
        parent::boot();

        static::enableUuidBootHandler();
        static::enableAuthUserIdBootHandler();
    }
}
