<?php

namespace App\Services\Playground;

use App\Models\PlaygroundConfiguration;
use App\Services\BaseService;

class PlaygroundConfigurationService extends BaseService
{
    protected $model;

    public function __construct()
    {
        $this->model = PlaygroundConfiguration::class;
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
