<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bus;
use Brian2694\Toastr\Facades\Toastr;

class BusController extends Controller
{
    public function add_bus()
    {
        return view('dashboard.pages.add_bus');
    }

    public function store_bus(Request $req)
    {
        $req->validate([
            'bus_name' => 'required',
            'bus_model' => 'required',
            'supervisor_name' => 'required',
            'supervisor_number' => 'required',
        ]);

        Bus::create([
            'bus_name' => $req->bus_name,
            'bus_model' => $req->bus_model,
            'supervisor_name' => $req->supervisor_name,
            'supervisor_number' => $req->supervisor_number,
        ]);
        Toastr::success('Messages in here', 'Title', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

    public function show_bus()
    {
        $buses = Bus::all();
        return view('dashboard.pages.show_bus', ['buses' => $buses]);
    }

    public function edit_bus($id)
    {
        $data = Bus::findOrFail($id);
        return view('dashboard.edit-page.edit_bus', ['data' => $data]);
    }

    public function update_bus(Request $req, $id)
    {
        $update = Bus::findOrFail($id);
        $update->bus_name = $req->bus_name;
        $update->bus_model = $req->bus_model;
        $update->supervisor_name = $req->supervisor_name;
        $update->supervisor_number = $req->supervisor_number;
        $update->save();
        return redirect(route('show.bus'));
    }

    public function delete_bus($id)
    {
        $data = Bus::findOrFail($id);
        $data->delete();
        return redirect()->back();
    }
}
