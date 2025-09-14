<?php

namespace App\Services\Subscription;

use Illuminate\Support\Str;
use App\Models\Subscription;
use App\Services\BaseService;
use App\Constants\GlobalConstant;

class SubscriptionService extends BaseService
{
    protected $model;

    public function __construct()
    {
        $this->model = Subscription::class;
    }

    public function storeOrUpdate($data, $id = null)
    {
        try {

            // if ($data['is_discount'] == 0) {
            //     $data['discount_type'] = null;
            //     $data['discount'] = null;
            // }

            // // calculate per year amount
            // $total_per_year = $data['per_month'] * 12;
            // $data['per_year'] = sprintf("%.2f", $total_per_year);

            // if ($data['discount_type'] == GlobalConstant::DISCOUNT_PERCENTAGE) {
            //     $after_discount = $data['per_year'] - (($data['discount'] / 100) * $data['per_year']);
            //     $data['per_year'] = sprintf("%.2f", $after_discount);
            // }

            // if ($data['discount_type'] == GlobalConstant::DISCOUNT_FIXED) {
            //     $data['per_year'] = $data['per_year'] - $data['discount'];
            // }
            // Call parent method
            return parent::storeOrUpdate($data, $id);
        } catch (\Exception $e) {
            $this->logFlashThrow($e);
        }
    }
}
