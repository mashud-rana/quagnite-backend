<?php

namespace App\Services\Coach;

use App\Models\CoachingConversation;
use Illuminate\Support\Str;
use App\Services\BaseService;

class CoachingConversationService extends BaseService
{
    protected $model;

    public function __construct()
    {
        $this->model = CoachingConversation::class;
    }

    public function storeOrUpdate($data, $id = null)
    {
        $uuid = Str::uuid()->toString();
        $data['uuid'] = $uuid;
        try {
            // Call parent method
            return parent::storeOrUpdate($data, $id);
        } catch (\Exception $e) {
            $this->logFlashThrow($e);
        }
    }
}
