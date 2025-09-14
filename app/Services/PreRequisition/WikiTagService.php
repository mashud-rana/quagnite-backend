<?php

namespace App\Services\PreRequisition;

use App\Models\WikiTag;
use Illuminate\Support\Str;
use App\Services\BaseService;

class WikiTagService extends BaseService
{
    protected $model;

    public function __construct()
    {
        $this->model = WikiTag::class;
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
