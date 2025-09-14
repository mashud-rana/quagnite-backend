<?php

namespace App\Services\PreRequisition;

use \Illuminate\Support\Str;
use App\Services\BaseService;
use App\Models\CareerSection;

class CareerSectionService extends BaseService
{

    protected $model;

    public function __construct()
    {
        $this->model = CareerSection::class;
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
