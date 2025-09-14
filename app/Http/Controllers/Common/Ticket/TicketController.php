<?php

namespace App\Http\Controllers\Common\Ticket;

use App\Http\Controllers\Controller;
use App\Http\Requests\Common\TicketRequest;
use App\Models\FaqTopic;
use App\Models\Ticket;
use App\Models\User;
use App\Notifications\Common\CommonNotification;
use App\Services\Ticket\TicketService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    protected $ticketService;

    public function __construct(TicketService $ticketService)
    {
        $this->ticketService = $ticketService;
    }

    public function index()
    {
        set_page_meta('Ticket List');
        $tickets = Ticket::with(['user', 'replies', 'category'])
            ->withCount('replies')
            ->where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('common.ticket.index', compact('tickets'));
    }

    public function create()
    {
        set_page_meta('Create Ticket');
        $recent_tickets = Ticket::where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();
        $categories = FaqTopic::all();

        return view('common.ticket.create', compact('recent_tickets', 'categories'));
    }

    public function store(TicketRequest $request)
    {

        $data = $request->validated();
        $adminUser = User::where('user_type', 'admin')->first();

        try {
            $ticket = $this->ticketService->storeOrUpdate($data);
            $ticketDetailsUrl = route('admin.ticket.show', $ticket->id);
            $data = [
                'type' => 'ticket',
                'title' => $request->subject,
                'user' => Auth::user()->id,
                'msg' => 'Open a Ticket by'.' '.Auth::user()->full_name,
                'url' => $ticketDetailsUrl,
            ];
            $adminUser->notify(new CommonNotification($data));
            record_created_flash('Ticket Created Successfully.');

            return back();
        } catch (\Exception $e) {
            log_error($e);

            return back();
        }
    }

    public function show($slug)
    {
        set_page_meta('Ticket Details');
        $item = Ticket::with('replies')->where('slug', $slug)->first();

        return view('common.ticket.show', compact('item'));
    }

    public function update(TicketRequest $request, $id)
    {
        try {
            $ticket = Ticket::find($id);
            $ticket->status = $request->status;
            $ticket->save();
            record_updated_flash();

            return back();
        } catch (\Exception $e) {
            log_error($e);

            return back();
        }
    }

    public function assignTicket()
    {
        set_page_meta('Assigned Tickets');

        $userTickets = auth()->user()->assignedTickets()
            ->withCount('replies')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('teacher.ticket.assign-ticket', compact('userTickets'));
    }

    public function updateStatus(Request $request, Ticket $ticket)
    {
        $ticket->update(['status' => $request->status]);
        record_updated_flash('Status updated successfully.');

        return back();
    }
}
