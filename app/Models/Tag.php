<?php

namespace App\Models;

use App\Traits\ModelBootHandler;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory, ModelBootHandler;

    protected $guarded = ['id',];

    protected $appends = ['text'];

    public function scopeActive($query)
    {
        return $query->where('status', ACTIVE);
    }

    /**
     * Get the Tag's Tag Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tag_category()
    {
        return $this->belongsTo(TagCategory::class, 'tag_category_id');
    }

    public function magazines()
    {
        return $this->belongsToMany(Magazine::class);
    }

    public function getTextAttribute()
    {
        return $this->name;
    }
}
