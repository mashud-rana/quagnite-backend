<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attendee extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    protected $appends = ['full_name'];

    public function events()
    {
        return $this->belongsToMany(Event::class, 'event_attendee')
            ->withTimestamps();
    }

    // Accessor & mutators

    public function getFullNameAttribute()
    {
        return $this->first_name.' '.$this->last_name;
    }
}
