<?php

namespace App\Services\Faq;

use App\Models\FaqEntry;
use App\Services\BaseService;

class FaqService extends BaseService
{
    protected $model;

    public function __construct()
    {
        $this->model = FaqEntry::class;
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
