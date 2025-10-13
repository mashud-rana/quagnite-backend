<?php

namespace App\Models;

use App\Traits\ModelBootHandler;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Announcement extends Model
{
    use HasFactory, ModelBootHandler, SoftDeletes;

    protected $guarded = ['id'];

    //============== Relationships ==============
    public function reads()
    {
        return $this->morphMany(AnnouncementRead::class, 'readable');
    }

    public function myself_read()
    {
        return $this->morphOne(AnnouncementRead::class, 'readable')->where('readable_id', auth()->id());
    }

    public static function boot()
    {
        parent::boot();

        static::enableSlugBootHandler();
    }
}
