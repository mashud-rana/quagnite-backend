<?php

namespace App\Models;

use App\Traits\ModelBootHandler;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EnrollExam extends Model
{
    use HasFactory, ModelBootHandler;

    protected $guarded = ['id',];

    public function student()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }

    public function result()
    {
        return $this->hasOne(ExamResult::class);
    }

    public function scopePending($query)
    {
        return $query->where('status', PENDING);
    }

    public function scopeCompleted($query)
    {
        return $query->where('status', COMPLETE);
    }

    public function subscriptionList()
    {
        return $this->belongsTo(SubscriptionList::class, 'subscription_list_id');
    }


    public static function boot()
    {
        parent::boot();

        static::enableUuidBootHandler();
    }
}
