<?php

namespace App\Models;

use App\Traits\ModelBootHandler;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AnnouncementRead extends Model
{
    use HasFactory, SoftDeletes, ModelBootHandler;

    protected $guarded = ['id',];

    //============== Relationships ==============
     public function announcement()
    {
        return $this->belongsTo(Announcement::class);
    }

    public function readable()
    {
        return $this->morphTo();
    }


     public static function boot()
    {
        parent::boot();

        static::enableSlugBootHandler();
    }
}
