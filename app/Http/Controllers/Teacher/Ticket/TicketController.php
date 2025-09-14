<?php

namespace App\Http\Controllers\Teacher\Ticket;

use App\Constants\GlobalConstant;
use App\Http\Controllers\Controller;
use App\Models\AssignedTicket;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function index()
    {
        set_page_meta('Tickets');

        $items = AssignedTicket::where('user_id', Auth::id())->get();

        $tickets = [];
        if ($items->count() > 0) {
            foreach ($items as $item) {
                $course = $item->ticket;
                $tickets[] = $course;
            }
        }

        return view('teacher.ticket.index', compact('tickets'));
    }

    public function update(Request $request, $id)
    {
        $ticket = Ticket::find($id);
        $ticket->teacher_status = $request->status;
        $ticket->save();

        if ($request->status === GlobalConstant::TICKET_STATUS_ANSWERED && $ticket->student_status === GlobalConstant::TICKET_STATUS_SOLVED) {
            $ticket->status = GlobalConstant::TICKET_STATUS_SOLVED;
            $ticket->save();
        }

        record_updated_flash();

        return back();
    }

    public function show(Ticket $ticket)
    {
        set_page_meta('Ticket Details');

        return view('common.ticket.show', compact('ticket'));
    }
}
