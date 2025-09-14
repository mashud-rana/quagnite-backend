<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class EnrollCourse extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $appends = ['is_refund_valid'];

    public function student()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function subscriptionList()
    {
        return $this->belongsTo(SubscriptionList::class, 'subscription_list_id');
    }

    public function studentCertificate()
    {
        return $this->morphOne(StudentCertificate::class, 'certifiable');
    }

    public function getIsRefundValidAttribute()
    {
        $refundDays = config('settings.refund_duration', 30);
        $validUntil = Carbon::parse($this->created_at)->addDays($refundDays);

        return now()->lessThanOrEqualTo($validUntil);
    }
}
