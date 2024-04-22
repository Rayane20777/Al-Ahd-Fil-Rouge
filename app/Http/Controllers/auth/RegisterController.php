<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Secretary;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:8|max:255',
            'address' => 'required|min:8|max:255',
            'picture' => 'required|image'
        ]);

        $attributes['picture'] = $request->file('picture')->store('uploads');

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
            $member->description = $request->input('child_first_name');
            $member->registration = $request->input('child_last_name');
            $member->typeVehicle = $request->input('date_of_birth');
            $member->typePayment = $request->input('disorder');
            $member->user_id = $user->id;
            $member->save();
        }

        return redirect('/login');
    }
}
