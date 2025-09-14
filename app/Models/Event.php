<?php

namespace App\Models;

use App\Traits\ModelBootHandler;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class Event extends Model
{
    use HasFactory, ModelBootHandler, Searchable, SoftDeletes;

    protected $guarded = ['id'];

    protected $appends = ['attendee_count'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function speakers()
    {
        return $this->belongsToMany(Speaker::class, 'event_speaker')
            ->withTimestamps();
    }

    public function attendees()
    {
        return $this->belongsToMany(Attendee::class, 'event_attendee')
            ->withTimestamps();
    }

    public function getAttendeeCountAttribute()
    {
        return $this->attendees()->count();
    }

    public function toSearchableArray()
    {
        return [
            'title' => $this->title,
        ];
    }

    public static function boot()
    {
        parent::boot();

        static::enableSlugBootHandler();
        static::enableStorageTypeBootHandler();
    }
}
