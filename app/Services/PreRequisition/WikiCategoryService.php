<?php

namespace App\Services\PreRequisition;

use App\Models\WikiCategory;
use Illuminate\Support\Str;
use App\Services\BaseService;

class WikiCategoryService extends BaseService
{
    protected $model;

    public function __construct()
    {
        $this->model = WikiCategory::class;
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
