<?php

namespace App\Models;

use App\Traits\ModelBootHandler;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class DifficultyLevel extends Model
{
    use HasFactory, SoftDeletes, ModelBootHandler;

    protected $guarded = ['id',];

    public static function boot()
    {
        parent::boot();

        static::enableUuidBootHandler();
    }
}
