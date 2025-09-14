<?php

namespace App\Services\Subscription;

use App\Models\SubscriptionList;
use App\Services\BaseService;

class SubscriptionListService extends BaseService
{
    protected $model;

    public function __construct()
    {
        $this->model = SubscriptionList::class;
    }

    public function storeOrUpdate($data, $id = null)
    {
        try {
            // Call parent method
            return parent::storeOrUpdate($data, $id);
        } catch (\Exception $e) {
            $this->logFlashThrow($e);
        }
    }
}
