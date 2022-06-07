<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function getIndividualTicket(Ticket $ticket)
    {
        return $ticket;
    }

    public function getAllTicket(Request $request)
    {
        $tickets = Ticket::with('user')->get();
        return view('admin.Ticket.index', ['tickets' => $tickets]);
    }

    public function deleteTicket($ticket_id)
    {
        $ticket = Ticket::findOrFail($ticket_id);
        $success = $ticket->delete();
        $success ? request()->session()->flash('success', "Ticket Deleted Successfully") : request()->session()->flash('error', "Failed to delete");
        return redirect()->route('admin.ticket.index');
    }
}
