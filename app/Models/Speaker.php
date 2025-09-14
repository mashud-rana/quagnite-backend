<?php

namespace App\Models;

use App\Traits\ModelBootHandler;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Speaker extends Model
{
    use HasFactory, ModelBootHandler, SoftDeletes;

    protected $guarded = ['id'];

    public function events()
    {
        return $this->belongsToMany(Event::class, 'event_speaker')
            ->withTimestamps();
    }

    public static function boot()
    {
        parent::boot();

        static::enableStorageTypeBootHandler();
    }
}
