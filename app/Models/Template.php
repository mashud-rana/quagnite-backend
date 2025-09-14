<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Template extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id',];

    const STATUS_ACTIVE = 'active';
    const STATUS_INACTIVE = 'inactive';


    public function page()
    {
        return $this->hasOne(Page::class, 'template_id', 'id');
    }


}
