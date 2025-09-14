<?php

namespace App\Models;

use App\Traits\ModelBootHandler;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory , ModelBootHandler;

    protected $fillable = [
        'letter_grade',
        'GPA',
        'start_percentage',
        'end_percentage',
    ];
}
