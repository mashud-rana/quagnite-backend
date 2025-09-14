<?php

namespace App\Models;

use App\Traits\ModelBootHandler;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WikiCategory extends Model
{
    use HasFactory, ModelBootHandler, SoftDeletes;

    protected $guarded = ['id',];

    public function wikis()
    {
        return $this->hasMany(Wiki::class, 'wiki_category_id');
    }

    public function scopeActive($query)
    {
        return $query->where('status', ACTIVE);
    }
}
