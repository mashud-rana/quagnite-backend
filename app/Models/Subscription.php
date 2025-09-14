<?php

namespace App\Models;

use App\Traits\ModelBootHandler;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subscription extends Model
{
    use HasFactory, SoftDeletes, ModelBootHandler;

    protected $guarded = ['id',];

    public function scopeActive($query)
    {
        return $query->where('status', ACTIVE);
    }
}
