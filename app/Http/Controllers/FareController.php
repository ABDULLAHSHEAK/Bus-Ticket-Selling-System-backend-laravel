<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fare;
use App\Models\Location;

class FareController extends Controller
{
    public function add_fare()
    {
        $fares = Location::all();
        return view('dashboard.pages.add_fare', compact('fares'));
    }

    public function store_fare(Request $req)
    {
        $req->validate([
            'base_location' => 'required',
            'start_from' => 'required',
            'destination' => 'required',
            'fare_amount' => 'required|numeric',
            'effect_from' => 'required',
        ]);

        Fare::create([
            'base_location' => $req->base_location,
            'start_from' => $req->start_from,
            'destination' => $req->destination,
            'fare_amount' => $req->fare_amount,
            'effect_from' => $req->effect_from,
        ]);
        return redirect()->back();
    }

    public function show_fare()
    {
        $fares = Fare::with('MainLocation', 'StartLocation', 'EndLocation')->get();
        return view('dashboard.pages.show_fare', ['fares' => $fares]);
    }

    public function edit_fare($id)
    {
        $place = Location::all();
        $fares = Fare::with('MainLocation','StartLocation', 'EndLocation',)->findOrFail($id);
        return view('dashboard.edit-page.edit_fare', compact('place', 'fares'));
    }

    public function update_fare(Request $req, $id)
    {
        $update = Fare::findOrFail($id);
        $update->base_location = $req->base_location;
        $update->start_from = $req->start_from;
        $update->destination = $req->destination;
        $update->fare_amount = $req->fare_amount;
        $update->effect_from= $req->effect_from;
        $update->save();
        return redirect(route('show.fare'));
    }

    public function delete_fare($id)
    {
        $data = Fare::findOrFail($id);
        $data->delete();
        return redirect()->back();
    }
}
