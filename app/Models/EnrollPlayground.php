<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EnrollPlayground extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id',];


    public function student()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function playground()
    {
        return $this->belongsTo(Playground::class);
    }

    public function subscriptionList()
    {
        return $this->belongsTo(SubscriptionList::class, 'subscription_list_id');
    }
}
