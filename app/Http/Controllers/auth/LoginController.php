<?php

namespace App\Http\Controllers\Auth;

use App\Models\Admin;
use App\Models\Member;
use App\Models\Secretary;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate (Request $request){
        $attributes = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(! auth()->attempt($attributes)){
            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified.'
            ]);
        }

        session()->regenerate();

        if (sizeof(Member::where('user_id', auth()->id())->get()) > 0){
            // auth()->user()->role = 'member';
            return redirect()->route('member_sessions.index');
        } elseif (sizeof(Secretary::where('user_id', auth()->id())->get()) > 0){
            // auth()->user()->role = 'secretary';
            return redirect()->route('secretary.users');
        } elseif (sizeof(Admin::where('user_id', auth()->id())->get()) > 0) {
            // auth()->user()->role = 'admin';
            return redirect()->route('admin.users');
        }
    }

    public function logout(){
        auth()->logout();

        return redirect('/');
    }
}
