<?php

namespace App\Services\PreRequisition;

use Illuminate\Support\Str;
use App\Models\CoachCategory;
use App\Services\BaseService;

class CoachCategoryService extends BaseService
{
    protected $model;

    public function __construct()
    {
        $this->model = CoachCategory::class;
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
