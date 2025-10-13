<?php

namespace App\Services\Api\V1\Teacher\Announcement;

use App\Models\Announcement;
use App\Services\BaseService;

class AnnouncementService extends BaseService
{
    public function __construct(Announcement $model)
    {
            parent::__construct($model);
    }
}
