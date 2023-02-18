<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $users = User::all();

        return view('pages.admin.index', compact('users'));
    }

    public function userDestroy(Request $request) {
        $user = User::find($request->account_id);
        $user->delete();

        return redirect()->back();
    }

    public function show($id) {
        $user = User::find($id);

        return view('pages.admin.update-role', compact('user'));
    }

    public function edit($id, Request $request) {
        $user = User::find($id);

        $request->validate([
            'role_id' => 'required',
        ]);

        $user->update([
            'role_id' => $request->role_id,
        ]);

        return redirect()->route('admin');
    }
}
