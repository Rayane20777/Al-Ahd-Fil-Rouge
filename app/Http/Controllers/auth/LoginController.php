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
                return redirect()->route('secretary.users');
            } elseif ($user->member()->exists()) {
                return redirect()->route('member.home');
            } elseif ($user->admin()->exists()) {
                return redirect()->route('admin.users');
            } else {
                return redirect()->route('home');
            }
        } else {
            return back()->withErrors(['email' => 'Invalid credentials']);
        }
    }
}
