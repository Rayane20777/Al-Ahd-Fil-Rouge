<?php

namespace App\Http\Controllers\Auth;

use App\Models\Member;
use App\Models\Secretary;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {

        $attributes = $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:8|max:255',
            'address' => 'required|min:8|max:255',
            'role' => 'required',
        ]);




        $user = User::create($attributes);

        if ($request->input('role') === 'secretary') {

            $secretary = new Secretary();
            $secretary->user_id = $user->id;
            $secretary->save();

        } elseif ($request->input('role') === 'member') {
            $request->validate([
                'child_first_name' => 'required|max:255',
                'child_last_name' => 'required|max:255',
                'date_of_birth' => 'required|max:255',
                'disorder' => 'required|max:255',
            ]);

            $member = new Member();
            $member->child_first_name = $request->input('child_first_name');
            $member->child_last_name = $request->input('child_last_name');
            $member->date_of_birth = $request->input('date_of_birth');
            $member->disorder = $request->input('disorder');
            $member->user_id = $user->id;
            $member->save();
        }

        return redirect('/login');
    }
}
