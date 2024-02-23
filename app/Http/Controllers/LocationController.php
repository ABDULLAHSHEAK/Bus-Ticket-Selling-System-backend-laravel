<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use Brian2694\Toastr\Facades\Toastr;

class LocationController extends Controller
{

    public function location()
    {
        return view('dashboard.pages.location');
    }

    public function store_location(Request $req)
    {
        $req->validate([
            'place' => 'required',
            'distance_km' => 'required|numeric',
            'stopage_order' => 'required|numeric',
        ]);

        Location::create([
            'place_name' => $req->place,
            'distance_km' => $req->distance_km,
            'stopage_order' => $req->stopage_order,
        ]);
        Toastr::success('Location created successfully!', 'Create');
        return redirect()->back();
    }

    public function show_location()
    {
        $data = Location::all();
        return view('dashboard.pages.show_location',['data' => $data]);
    }

    public function edit_location($id){
        $data = Location::findOrFail($id);
        return view('dashboard.edit-page.edit_location',['data' =>$data]);
    }

    public function update_location(Request $req ,$id){
        $update = Location::findOrFail($id);
        $update->place_name = $req->place;
        $update->distance_km = $req->distance_km;
        $update->stopage_order = $req->stopage_order;
        $update->save();
        return redirect(route('show.location'));
    }

    public function delete_location($id){
        $data = Location::findOrFail($id);
        $data->delete();
        return redirect()->back();
    }
}
