<?php

namespace App\Services\Exam;

use Illuminate\Support\Str;
use App\Services\BaseService;
use App\Models\Question;

class QuestionService extends BaseService
{
    protected $model;

    public function __construct()
    {
        $this->model = Question::class;
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
