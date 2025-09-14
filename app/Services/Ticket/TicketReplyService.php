<?php

namespace App\Services\Ticket;

use App\Models\TicketComment;
use App\Services\BaseService;

class TicketReplyService extends BaseService
{
    protected $model;

    public function __construct()
    {
        $this->model = TicketComment::class;
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
