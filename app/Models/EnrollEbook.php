<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnrollEbook extends Model
{
    use HasFactory;

    protected $guarded = ['id',];

    public function student()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function ebook()
    {
        return $this->belongsTo(Ebook::class, 'ebook_id');
    }
    public function subscriptionList()
    {
        return $this->belongsTo(SubscriptionList::class, 'subscription_list_id');
    }
}
