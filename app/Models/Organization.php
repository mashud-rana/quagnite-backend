<?php

namespace App\Models;

use App\Traits\ModelBootHandler;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Organization extends Model
{
    use HasFactory, HasApiTokens, SoftDeletes, ModelBootHandler;

    protected $guarded = ['id',];

    public function user()
    {
        $this->belongsTo(User::class);
    }

    public static function boot()
    {
        parent::boot();

        static::enableUuidBootHandler();
    }
}
