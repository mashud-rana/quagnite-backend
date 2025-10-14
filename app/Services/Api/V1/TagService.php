<?php

namespace App\Services\Api\V1;

use App\Models\Tag;
use App\Services\BaseService;
use Illuminate\Database\Eloquent\Model;

class TagService extends BaseService
{
    public function __construct(Tag $model)
    {
        parent::__construct($model);
    }
}
