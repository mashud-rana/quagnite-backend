<?php

namespace App\Services;

use App\Models\ContactUs;

class ContactUsService extends BaseService
{
    protected $model;

    public function __construct()
    {
        $this->model = ContactUs::class;
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
