<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function add_user()
    {
        return view('dashboard.pages.add_user');
    }

    public function store_user(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required|email',
            'number' => 'required|numeric',
            'user_type' => 'required',
            'password' => 'required|',
        ]);

        user::create([
            'name' => $req->name,
            'email' => $req->email,
            'number' => $req->number,
            'user_type' => $req->user_type,
            'password' => $req->password,
        ]);
        return redirect()->back();
    }

    public function show_user()
    {
        $users = User::all();
        return view('dashboard.pages.show_user', ['users' => $users]);
    }

    public function edit_user($id)
    {
        $data = User::findOrFail($id);
        return view('dashboard.edit-page.edit_user', ['data' => $data]);
    }

    public function update_user(Request $req, $id)
    {
        $update = User::findOrFail($id);
        $update->name = $req->name;
        $update->email = $req->email;
        $update->number = $req->number;
        $update->user_type = $req->user_type;
        $update->password = $req->password;
        $update->save();
        return redirect(route('show.user'));
    }

    public function delete_user($id)
    {
        $data = User::findOrFail($id);
        $data->delete();
        return redirect()->back();
    }
}
