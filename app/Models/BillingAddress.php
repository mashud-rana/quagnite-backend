<?php

namespace App\Models;

use App\Traits\ModelBootHandler;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BillingAddress extends Model
{
    use HasFactory, SoftDeletes, ModelBootHandler;

    protected $guarded = ['id'];

    public static function boot()
    {
        parent::boot();

        static::enableCreatedUpdatedBootHandler();
    }
}
