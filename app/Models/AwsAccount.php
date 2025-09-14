<?php

namespace App\Models;

use App\Traits\ModelBootHandler;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AwsAccount extends Model
{
    use HasFactory, ModelBootHandler, SoftDeletes;

    protected $fillable = [
        'acc_name',
        'acc_id',
        'acc_profile',
        'user_group',
        'status',
        'is_occupied',
        'created_by',
        'updated_by',
    ];

    public function scopeActive($query)
    {
        return $query->where('status', ACTIVE);
    }

    public function scopeAvailable($query)
    {
        return $query->where('is_occupied', 0);
    }

    public static function boot()
    {
        parent::boot();

        static::enableCreatedUpdatedBootHandler();
    }
}
