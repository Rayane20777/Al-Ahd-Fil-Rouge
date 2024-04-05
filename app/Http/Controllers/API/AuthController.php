<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use App\Models\Member;
use App\Models\Doctor;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterMemberRequest;
use App\Http\Requests\RegisterDoctorRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'registerMember','registerDoctor']]);
    }

    public function registerMember(RegisterMemberRequest $request)
    {
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'password' => Hash::make($request->input('password')),
        ]);

        $member = Member::create([
            'user_id' => $user->id,
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'date_of_birth' => $request->input('date_of_birth'),
            'disorder' => $request->input('disorder'),
            'description' => $request->input('description'),
            'status' => $request->input('status'),
        ]);

        return response()->json(['user' => $user, 'member' => $member], 201);
    }

    public function registerDoctor(RegisterDoctorRequest $request)
    {
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'password' => Hash::make($request->input('password')),
        ]);

        $doctor = Doctor::create([
            'user_id' => $user->id,
            'profession_id' => $request->input('profession_id'),
            'status' => $request->input('status'),
        ]);

        return response()->json(['user' => $user, 'doctor' => $doctor], 201);
    }

    public function login(LoginRequest $request)
{
    $request->validated();

    $credentials = $request->only('email', 'password');
    $token = Auth::attempt($credentials);
    
    if (!$token) {
        return response()->json([
            'message' => 'Unauthorized',
        ], 401);
    }

    $user = Auth::user();
    $redirectRoute = '';

    switch (true) {
        case $user->member()->exists():
            $redirectRoute = 'member.dashboard'; 
            break;
        case $user->doctor()->exists():
            $redirectRoute = 'doctor.dashboard';
            break;
        case $user->secretary()->exists():
            $redirectRoute = 'secretary.dashboard'; 
            break;
        case $user->admin()->exists():
            $redirectRoute = 'admin.dashboard'; 
            break;
        default:
            $redirectRoute = 'default.dashboard'; 
            break;
    }

    return response()->json([
        'user' => $user,
        'authorization' => [
            'token' => $token,
            'type' => 'bearer',
        ],
        'redirect_to' => $redirectRoute, // Include the redirect route in the response
    ]);
}


    public function logout()
    {
        Auth::logout();
        return response()->json([
            'message' => 'Successfully logged out',
        ]);
    }

}