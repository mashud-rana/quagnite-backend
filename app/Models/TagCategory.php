<?php

namespace App\Models;


use App\Traits\ModelBootHandler;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TagCategory extends Model
{
    use HasFactory, ModelBootHandler, SoftDeletes;

    protected $guarded = ['id',];

    public function scopeActive($query)
    {
        return $query->where('status', ACTIVE);
    }
}
