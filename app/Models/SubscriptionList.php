<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubscriptionList extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id',];

    protected $dates = ['valid_till'];

    public function subscription()
    {
        return $this->belongsTo(Subscription::class);
    }

    public function enrollEbooks()
    {
        return $this->hasMany(EnrollEbook::class, 'subscription_list_id');
    }

    public function enrollExams()
    {
        return $this->hasMany(EnrollExam::class, 'subscription_list_id');
    }

    public function enrollPlaygrounds()
    {
        return $this->hasMany(EnrollPlayground::class, 'subscription_list_id');
    }

    public function scopeActive($query)
    {
        return $query->where('status', ACTIVE);
    }

    public function scopeExpired($query)
    {
        return $query->where('status', EXPIRED);
    }
}
