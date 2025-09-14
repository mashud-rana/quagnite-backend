<?php

namespace App\Services\Admin;

use App\Models\Announcement;
use App\Services\BaseService;

class AnnouncementService extends BaseService
{
    protected $model;

    public function __construct()
    {
        $this->model = Announcement::class;
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
