<?php

namespace App\Models;

use App\Models\Question;
use App\Traits\ModelBootHandler;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Exam extends Model
{
    use HasFactory, SoftDeletes, ModelBootHandler;

    protected $guarded = ['id'];


    public function questions()
    {
        return $this->morphMany(Question::class, 'questionable');
    }

    public function scopeActive($query)
    {
        return $query->where('status', ACTIVE);
    }

    public function getFormattedTimeAttribute()
    {
        $hours = floor($this->duration / 60);
        $minutes = $this->duration % 60;

        return sprintf('%02d:%02d', $hours, $minutes);
    }

    public static function boot()
    {
        parent::boot();

        static::enableUuidBootHandler();
        static::enableSlugBootHandler();
        static::enableStorageTypeBootHandler();
    }
}
