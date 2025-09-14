<?php

namespace App\Models;

use App\Traits\ModelBootHandler;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EnrollCoach extends Model
{
    use HasFactory, SoftDeletes, ModelBootHandler;

    protected $guarded = ['id',];

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id', 'id');
    }

    public function coach()
    {
        return $this->belongsTo(User::class, 'coach_id', 'id');
    }

    public function slot()
    {
        return $this->belongsTo(CoachingSlot::class, 'coaching_slot_id', 'id');
    }

    public function conversation()
    {
        return $this->hasMany(CoachingConversation::class);
    }

    public function getFormattedDurationAttribute()
    {
        $durationInMinutes = $this->attributes['duration'];

        // Convert minutes to hours
        $durationInHours = floor($durationInMinutes / 60);

        // Format the result
        $formattedDuration = ($durationInHours > 1) ?
            "{$durationInHours} Hrs" : "{$durationInHours} Hr";

        return $formattedDuration;
    }

    public static function boot()
    {
        parent::boot();

        static::enableUuidBootHandler();
    }
}
