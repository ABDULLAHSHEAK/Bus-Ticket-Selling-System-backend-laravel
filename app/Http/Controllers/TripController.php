<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;
use App\Models\Bus;
use App\Models\Location;

class TripController extends Controller
{
    public function add_trip()
    {
        $bus = Bus::all();
        $place = Location::all();
        return view('dashboard.pages.add_trip',compact('bus', 'place'));
    }

    public function store_trip(Request $req)
    {
        $req->validate([
            'bus_name' =>'required',
            'trip_date' => 'required',
            'trip_time' => 'required',
            'start_from' => 'required',
            'destination' => 'required',
        ]);

        Trip::create([
            'bus_id' => $req->bus_name,
            'trip_date' => $req->trip_date,
            'trip_time' => $req->trip_time,
            'start_from' => $req->start_from,
            'destination' => $req->destination,
        ]);
        return redirect()->back();
    }

    public function show_trip()
    {
        $tripes = Trip::with('bus', 'StartLocation', 'EndLocation')->get();
        return view('dashboard.pages.show_trip', ['tripes' => $tripes]);
    }

    public function edit_trip($id)
    {
        $bus = Bus::all();
        $place = Location::all();
        $date_time = Trip::with('StartLocation', 'EndLocation', 'bus')->findOrFail($id);
        return view('dashboard.edit-page.edit_trip',compact('bus','place', 'date_time'));
    }

    public function update_trip(Request $req, $id)
    {
        $update = Trip::findOrFail($id);
        $update->bus_id = $req->bus_name;
        $update->trip_date = $req->trip_date;
        $update->trip_time = $req->trip_time;
        $update->start_from = $req->start_from;
        $update->destination = $req->destination;
        $update->save();
        return redirect(route('show.trip'));
    }

    public function delete_trip($id)
    {
        $data = Trip::findOrFail($id);
        $data->delete();
        return redirect()->back();
    }
}
