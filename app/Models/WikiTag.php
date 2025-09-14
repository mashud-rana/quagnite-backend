<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WikiTag extends Model
{
    use HasFactory;

    protected $guarded = ['id',];

    public function wiki()
    {
        return $this->belongsTo(Wiki::class, 'wiki_id');
    }

    public function tag()
    {
        return $this->belongsTo(Tag::class, 'tag_id');
    }

    public function scopeActive($query)
    {
        return $query->where('status', ACTIVE);
    }
}
