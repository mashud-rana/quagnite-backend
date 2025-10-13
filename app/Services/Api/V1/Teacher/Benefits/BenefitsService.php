<?php

namespace App\Services\Api\V1\Teacher\Benefits;

use App\Models\Benefit;
use App\Services\BaseService;

class BenefitsService extends BaseService
{
    public function __construct(Benefit $model)
    {
            parent::__construct($model);
    }
}
