<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seat;

class SeatController extends Controller
{
    public function show_seat()
    {
        $tickets = Seat::with('user', 'trip', 'StartFrom', 'Destination')->get();
        return view('dashboard.pages.show_seat', compact('tickets'));
    }

    public function seat_details($id)
    {
        $data = Seat::with('user', 'trip','trip.bus', 'StartFrom', 'Destination')->findOrFail($id);
        // dd($data);
        return view('dashboard.pages.ticket_details', compact('data'));
    }
}
