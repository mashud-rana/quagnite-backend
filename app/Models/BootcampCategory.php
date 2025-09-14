<?php

namespace App\Models;

use App\Constants\GlobalConstant;
use App\Traits\ModelBootHandler;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class BootcampCategory extends Model
{
    use HasFactory, SoftDeletes, ModelBootHandler;

    protected $guarded = ['id',];

    public function scopeActive($query)
    {
        return $query->where('status', ACTIVE);
    }

    public static function boot()
    {
        parent::boot();

        static::enableCreatedUpdatedBootHandler();
    }
}
