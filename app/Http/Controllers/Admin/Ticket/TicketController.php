<?php

namespace App\Http\Controllers\Admin\Ticket;

use App\Models\User;
use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\Admin\Ticket\TicketDataTable;

class TicketController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:All Tickets|Edit Ticket|Create Ticket|Delete Ticket', ['only' => ['index']]);
        $this->middleware('permission:Create Ticket', ['only' => ['create', 'store']]);
        $this->middleware('permission:Edit Ticket', ['only' => ['assignTicket', 'updateStatus']]);
        $this->middleware('permission:Show Ticket', ['only' => ['show']]);
        $this->middleware('permission:Delete Ticket', ['only' => ['destroy']]);
    }

    public function index(TicketDataTable $dataTable)
    {
        set_page_meta('All Tickets');
        return $dataTable->render('admin.ticket.index');
    }

    public function updateStatus(Request $request, Ticket $ticket)
    {
        try {
            $ticket->update(['status' => $request->status]);
            record_updated_flash('Status updated successfully.');
        } catch (\Exception $e) {
            log_error($e);
            something_wrong_flash('An error occurred while updating ticket status.');
        }

        return back();
    }


    public function assignTicket(Request $request, $ticketId)
    {
        try {
            $ticket = Ticket::findOrFail($ticketId);

            $assignedUserId = $request->input('assigned_user_id');

            $ticket->update([
                'assigned_by' => $assignedUserId,
                'status' => $request->status
            ]);
            record_updated_flash('Ticket assigned successfully!');
        } catch (\Exception $e) {
            log_error($e);
            something_wrong_flash('An error occurred while assigning the ticket.');
        }

        return back();
    }


    public function show($id)
    {
        try {
            set_page_meta('Ticket Details');
            $item = Ticket::with('replies')->where('id', $id)->firstOrFail();
            $teachers = User::where('user_type', USER_TYPE_TEACHER)->get();
            return view('admin.ticket.ticket-replay', compact('item', 'teachers'));
        } catch (\Exception $e) {
            log_error($e);
            something_wrong_flash('An error occurred while retrieving ticket details.');
            return redirect()->back();
        }
    }


    public function destroy($id)
    {
        try {
            Ticket::find($id)->first()->delete();
            record_deleted_flash();
            return back();
        } catch (\Exception $e) {
            log_error($e);
            something_wrong_flash();
            return back();
        }
    }


    public function ticketReply()
    {
        return view('admin.ticket.ticket-replay');
    }


    public function notificationList()
    {
        return view('admin.notification.index');
    }
}
