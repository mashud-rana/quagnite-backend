<?php

namespace App\Services\Api\V1\Teacher\Language;

use App\Models\CourseLanguage;
use App\Services\BaseService;
use Illuminate\Database\Eloquent\Model;

class LanguageService extends BaseService
{
    public function __construct(CourseLanguage $model)
    {
        parent::__construct($model);
    }
}
