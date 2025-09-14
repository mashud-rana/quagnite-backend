<?php

namespace App\Models;

use App\Traits\ModelBootHandler;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Refund extends Model
{
    use HasFactory, ModelBootHandler, SoftDeletes;

    protected $guarded = ['id'];

    public function refundable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function beneficiary()
    {
        return $this->belongsTo(Beneficiary::class, 'beneficiary_id', 'id');
    }

    public function transactions()
    {
        return $this->morphMany(Transaction::class, 'transactionable');
    }

    public function scopePending($query)
    {
        return $query->where('status', PENDING);
    }

    public static function boot()
    {
        parent::boot();

        static::enableUuidBootHandler();
        static::enableAuthUserIdBootHandler();
    }
}
