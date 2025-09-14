<?php

namespace App\Services\Playground;

use App\Models\PlaygroundCategory;
use App\Services\BaseService;
use App\Services\Utils\FileService;

class PlaygroundCategoryService extends BaseService
{
    protected $model;
    protected $fileService;

    public function __construct(FileService $fileService)
    {
        $this->model = PlaygroundCategory::class;
        $this->fileService = $fileService;
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
