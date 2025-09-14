<?php

namespace App\Services\Ticket;

use App\Models\Ticket;
use App\Services\BaseService;
use Illuminate\Support\Str;

class TicketService extends BaseService
{
    protected $model;

    public function __construct()
    {
        $this->model = Ticket::class;
    }

    public function storeOrUpdate($data, $id = null)
    {
        // create ticket ID
        $lastTicket = Ticket::latest('ticket_id')->first();
        if ($lastTicket) {
            $lastSerialNumber = (int) substr($lastTicket->ticket_id, -4);
            $newSerialNumber = str_pad($lastSerialNumber + 1, 4, '0', STR_PAD_LEFT);
        } else {
            $newSerialNumber = '0000';
        }
        $year = now()->year;
        $month = now()->format('m');
        $ticketId = "{$year}{$month}-MC{$newSerialNumber}";
        $data['ticket_id'] = $ticketId;

        // slug create
        $slug = Str::slug($data['subject']);
        $uniqueSlug = $slug;

        $count = 2;
        while (Ticket::where('slug', $uniqueSlug)->where('id', '!=', $id)->exists()) {
            $uniqueSlug = $slug.'-'.$count;
            $count++;
        }
        $data['slug'] = $uniqueSlug;
        try {
            // Call parent method
            return parent::storeOrUpdate($data, $id);
        } catch (\Exception $e) {
            $this->logFlashThrow($e);
        }
    }
}
