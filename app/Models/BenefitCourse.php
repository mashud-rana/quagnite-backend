<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BenefitCourse extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function benefit(){
        return $this->belongsTo(Benefit::class, 'benefit_id', 'id');
    }
}
