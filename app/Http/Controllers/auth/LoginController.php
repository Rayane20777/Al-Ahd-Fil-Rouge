<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->secretary()->exists()) {
                return redirect()->route('secretary.dashboard');
            } elseif ($user->member()->exists()) {
                return redirect()->route('member.dashboard');
            } elseif ($user->admin()->exists()) {
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('home');
            }
        } else {
            return back()->withErrors(['email' => 'Invalid credentials']);
        }
    }
}
