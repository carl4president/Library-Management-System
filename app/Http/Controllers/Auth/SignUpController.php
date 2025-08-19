<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignUpController extends Controller
{
    public function signup(){
        return view('auth.signup');
    }

    public function signin(Request $request){
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string|confirmed', // confirmed required 'password_confirmation'

        ]);

        try{
        
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            return redirect()->route('login')->with('success', 'Account created successfully!');

        } catch (\Exception $e){
            return back()->withErrors('error', 'Failed creating account');
        }
    }
}
