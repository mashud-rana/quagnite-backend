<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    const STATUS_ACTIVE = 'active';
    const STATUS_INACTIVE = 'inactive';

    protected $casts = [
        'name' => 'array',
        'meta_title' => 'array',
        'meta_description' => 'array',
    ];

    public function pageContents()
    {
        return $this->hasMany(PageContent::class, 'page_id', 'id');
    }
}
