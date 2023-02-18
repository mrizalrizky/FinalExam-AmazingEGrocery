<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function register(RegisterRequest $request) {
        $file = $request->file('display_picture_link');

        $imageName = 'images/'.Str::lower($request->first_name).'-'.Str::lower($request->last_name).'-'.time().'.'.$file->getClientOriginalExtension();
        Storage::putFileAs('public/', $file, $imageName);

        User::create([
            'first_name'           => $request->first_name,
            'last_name'            => $request->last_name,
            'email'                => Str::lower($request->email),
            'password'             => Hash::make($request->password),
            'gender_id'            => $request->gender_id,
            'role_id'              => $request->role_id,
            'display_picture_link' => $imageName,
        ]);

        return redirect()->route('login')->with('success', 'Account registration success');
    }

    public function login(LoginRequest $request) {
        $credentials = [
            'email'    => $request->email,
            'password' => $request->password,
        ];

        if(auth()->attempt($credentials, true)) {
            session()->put('loginSession', $credentials);

            return redirect()->route('home');
        }
        else return redirect()->back()->with('failed', 'Login failed');
    }

    public function logout() {
        auth()->logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('logout.success');
    }

    public function success() {
        return view('pages.auth.logout-success');
    }
}
