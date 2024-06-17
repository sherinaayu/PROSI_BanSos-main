<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $user = Pengguna::create([
            'Name' => $request->name,
            'Email' => $request->email,
            'Username' => $request->username,
            'Password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        auth()->login($user);

        return redirect()->route('login');
    }
}