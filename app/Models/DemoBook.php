<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DemoBook extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id',];


    protected $casts = [
        'attributes' => 'json',
    ];
}
