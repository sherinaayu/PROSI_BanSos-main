<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Pengguna;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('username', 'password');
        
        $user = Pengguna::where('Username', $credentials['username'])->first();
        
        if ($user && Hash::check($credentials['password'], $user->Password)) {
            Auth::login($user);
            
            // Redirect based on user role
            switch ($user->role) {
                case 1:
                    return redirect()->route('admin.dashboard');
                case 2:
                    return redirect()->route('dashboardm');
                case 3:
                    return redirect()->route('dashboardrt');
                case 4:
                    return redirect()->route('dashboardrw');
                case 5:
                    return redirect()->route('dashboardk');
            }
        }

        return back()->withErrors([
            'username' => 'Wrong Username or Password',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}