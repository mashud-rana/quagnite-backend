<?php

namespace App\Models;

use App\Traits\ModelBootHandler;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coupon extends Model
{
    use HasFactory, ModelBootHandler, SoftDeletes;

    protected $guarded = ['id'];

    public static function boot()
    {
        parent::boot();

        static::enableCreatedUpdatedBootHandler();
    }

    public function isValidForPlan($plan, $planType, &$message = null)
    {
        // Check if the coupon has expired
        if ($this->end_date !== null && now()->greaterThan($this->end_date)) {
            $message = 'Coupon has expired.';

            return false;
        }
        // Check if the coupon is a global coupon
        if ($this->coupon_type === GLOBAL_COUPON) {
            if ($this->canBeApplied($plan->price, $message)) {
                return true;
            }

            return false;
        }

        // Check if the coupon type matches the plan type
        if ($this->coupon_type !== $planType) {
            $message = 'Coupon is not valid for this type of plan.';

            return false;
        }

        // Check maximum usage limit
        if ($this->maximum_use_limit !== null && $this->usage_count >= $this->maximum_use_limit) {
            $message = 'Coupon usage limit has been reached.';

            return false;
        }

        // Check minimum amount requirement
        if (! $this->canBeApplied($plan->price, $message)) {
            return false;
        }

        return true;
    }

    protected function canBeApplied($price, &$message = null)
    {
        // Check if the plan price meets the minimum amount requirement
        if ($this->minimum_amount !== null && $price < $this->minimum_amount) {
            $message = 'Minimum amount required for coupon is not met.';

            return false;
        }

        return true;
    }
}
