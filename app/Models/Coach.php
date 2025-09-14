<?php

namespace App\Models;

use App\Traits\ModelBootHandler;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

class Coach extends Model
{
    use HasFactory, ModelBootHandler, SoftDeletes;

    protected $guarded = ['id'];

    protected $appends = [
        'coach_enrollments_count',
        'coach_total_duration',
        'coach_this_week_enrollments_count',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopePending($query)
    {
        return $query->where('status', PENDING);
    }

    public function scopeApproved($query)
    {
        return $query->where('status', APPROVED);
    }

    public function scopeBlocked($query)
    {
        return $query->where('status', BLOCK);
    }

    public function enrollments()
    {
        return $this->hasMany(EnrollCoach::class, 'coach_id', 'user_id');
    }

    public function getCoachEnrollmentsCountAttribute()
    {
        if (! $this->relationLoaded('enrollments')) {
            $this->load('enrollments');
        }

        return $this->getRelation('enrollments')->count();
    }

    public function getCoachThisWeekEnrollmentsCountAttribute()
    {
        $startOfWeek = Carbon::now()->startOfWeek();
        $endOfWeek = Carbon::now()->endOfWeek();

        if (! $this->relationLoaded('enrollments')) {
            $this->load('enrollments');
        }

        return $this->getRelation('enrollments')
            ->whereBetween('created_at', [$startOfWeek, $endOfWeek])
            ->count();
    }

    public function getCoachTotalDurationAttribute()
    {
        if (! $this->relationLoaded('enrollments')) {
            $this->load('enrollments');
        }

        $totalMinutes = $this->getRelation('enrollments')->sum('duration');

        $hours = floor($totalMinutes / 60);
        $minutes = $totalMinutes % 60;

        $formattedDuration = ($hours > 0 ? $hours.' '.\Illuminate\Support\Str::plural('hour', $hours) : '').
            ($hours > 0 && $minutes > 0 ? ' ' : '').
            ($minutes > 0 ? $minutes.' '.\Illuminate\Support\Str::plural('minute', $minutes) : '');

        return trim($formattedDuration);
    }

    public static function boot()
    {
        parent::boot();

        static::enableUuidBootHandler();
    }
}
