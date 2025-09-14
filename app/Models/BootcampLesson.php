<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Traits\ModelBootHandler;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BootcampLesson extends Model
{
    use HasFactory, SoftDeletes, ModelBootHandler;

    protected $guarded = ['id',];

    /**
     * Get the Course details
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bootcamp()
    {
        return $this->belongsTo(Bootcamp::class);
    }

    public function lecture()
    {
        return $this->hasMany(BootcampLecture::class, 'bootcamp_lesson_id');
    }

    public static function boot()
    {
        parent::boot();

        static::enableUuidBootHandler();
    }
}
