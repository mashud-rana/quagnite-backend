<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Traits\ModelBootHandler;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BootcampLecture extends Model
{
    use HasFactory, ModelBootHandler, SoftDeletes;

    protected $guarded = ['id',];

    public function bootcamp()
    {
        return $this->belongsTo(Bootcamp::class);
    }

    public function lesson()
    {
        return $this->belongsTo(BootcampLesson::class);
    }

    public function getFormattedDurationAttribute()
    {
        $minutes = $this->duration;
        $hours = floor($minutes / 60);
        $minutes %= 60;

        return sprintf('%02d:%02d:00', $hours, $minutes);
    }


    public static function boot()
    {
        parent::boot();

        static::enableUuidBootHandler();
    }
}
