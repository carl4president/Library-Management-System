<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        try {
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                $user = Auth::user();

                Session::put($this->getUserSessionData($user));
                return redirect()->route('dashboard')->with('success', 'Login successfully');
            } else {
                return back()->withErrors(['error' => 'Invalid Email'])->onlyInput('Email');
            }
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Invalid Credentials']);
        }
    }

    private function getUserSessionData($user)
    {
        return [
            'name' => $user->name,
            'email' => $user->email,
        ];
    }
}
