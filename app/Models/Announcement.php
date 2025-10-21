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


    public function myself_read()
    {
        return $this->hasOne(AnnouncementRead::class,'announcement_id','id')->where('readable_id',auth()->id());
    }

    public static function boot()
    {
        parent::boot();

        static::enableSlugBootHandler();
    }
}
