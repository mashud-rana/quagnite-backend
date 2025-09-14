<?php

namespace App\Services\PreRequisition;

use App\Models\EbookCategory;
use Illuminate\Support\Str;
use App\Services\BaseService;

class EbookCategoryService extends BaseService
{
    protected $model;

    public function __construct()
    {
        $this->model = EbookCategory::class;
    }

    public function storeOrUpdate($data, $id = null)
    {
        try {
            // Load additional data
            $data['slug'] = Str::slug($data['name']);

            // Call parent method
            return parent::storeOrUpdate($data, $id);
        } catch (\Exception $e) {
            $this->logFlashThrow($e);
        }
    }
}
