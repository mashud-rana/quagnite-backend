<?php

namespace App\Http\Controllers\Student\Ticket;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use App\Models\User;
use App\Constants\GlobalConstant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function index()
    {
        set_page_meta('Tickets');
        $tickets = Ticket::where('user_id', Auth::id())->orderBy('id', 'DESC')->get();
        return view('student.ticket.index', compact('tickets'));
    }

    public function update(Request $request, $id)
    {
        $ticket = Ticket::find($id);
        $ticket->student_status = $request->status;
        $ticket->save();

        if ($request->status === GlobalConstant::TICKET_STATUS_SOLVED && $ticket->teacher_status === GlobalConstant::TICKET_STATUS_ANSWERED) {
            $ticket->status = GlobalConstant::TICKET_STATUS_SOLVED;
            $ticket->save();
        }
        record_updated_flash();
        return back();
    }

    public function create()
    {
        set_page_meta('Create Ticket');
        $id = Auth::id();
        $user = User::find($id);
        return view('common.ticket.create', compact('user'));
    }

    public function show(Ticket $ticket)
    {
        set_page_meta('Ticket Details');
        return view('common.ticket.show', compact('ticket'));
    }
}
