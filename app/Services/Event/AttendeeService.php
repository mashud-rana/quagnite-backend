<?php

namespace App\Services\Event;

use App\Models\Attendee;
use Illuminate\Support\Str;
use App\Services\BaseService;

class AttendeeService extends BaseService
{
    protected $model;

    public function __construct()
    {
        $this->model = Attendee::class;
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
