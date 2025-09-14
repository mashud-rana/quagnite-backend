<?php

namespace App\Http\Controllers\Common\Ticket;

use App\Http\Controllers\Controller;
use App\Http\Requests\Common\TicketReplyRequest;
use App\Models\Ticket;
use App\Models\User;
use App\Notifications\Common\CommonNotification;
use App\Services\Ticket\TicketReplyService;

class ReplyController extends Controller
{
    public $ticketReplyService;

    public function __construct(TicketReplyService $ticketReplyService)
    {
        $this->ticketReplyService = $ticketReplyService;
    }

    public function store(TicketReplyRequest $request)
    {
        $data = $request->all();
        $ticket = Ticket::findOrFail($request->ticket_id);
        $adminUser = User::where('user_type', 'admin')->first();

        $assignedUser = $ticket->assignedTo;
        $assignedToCurrentUser = $assignedUser && $assignedUser->id === auth()->user()->id;
        $isAdmin = auth()->user()->user_type == USER_TYPE_ADMIN;

        $ticketDetailsUrl = ($assignedToCurrentUser || $isAdmin) ? route('ticket.show', $request->ticket_slug) : route('admin.ticket.show', $ticket->id);

        $notifydata = [
            'type' => 'ticket',
            'title' => $ticket->subject,
            'user' => auth()->user()->id,
            'msg' => 'Replies to the ticket'.' '.$ticket->ticket_id,
            'url' => $ticketDetailsUrl,
        ];

        try {
            $this->ticketReplyService->storeOrUpdate($data);
            if ($assignedToCurrentUser || $isAdmin) {
                $ticket->user->notify(new CommonNotification($notifydata));
            } else {
                $adminUser->notify(new CommonNotification($notifydata));
            }

            record_created_flash();

            return back();
        } catch (\Exception $e) {
            log_error($e);

            return back();
        }
    }
}
