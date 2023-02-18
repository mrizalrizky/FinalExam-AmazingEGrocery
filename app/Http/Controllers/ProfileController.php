<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Password;

class ProfileController extends Controller
{
    public function index() {
        return view('pages.profile.index');
    }

    public function update(Request $request) {
        $data = $request->validate([
            'first_name'           => 'required|string|max:25',
            'last_name'            => 'required|string|max:25',
            'email'                => 'required|email',
            'password'             => ['required', 'confirmed', Password::min(8)->numbers()],
            'display_picture_link' => 'image',
        ]);

        $user = User::find(auth()->user()->id);

        $imageName = '';
        if($request->file('display_picture_link')) {
            $file = $request->file('display_picture_link');
            $imageName = 'images/'.Str::lower($request->first_name).'-'.Str::lower($request->last_name).'-'.time().'.'.$file->getClientOriginalExtension();
            Storage::putFileAs('public/', $file, $imageName);
        }

        if(auth()->user()->password == $request->password) {
            unset($data['password']);
        }

        $user->save();

        return redirect('saved');
    }

    public function saved() {
        return view('pages.profile.saved');
    }
}
