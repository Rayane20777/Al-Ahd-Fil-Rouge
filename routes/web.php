<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/admin/users', function () {
    return view('/admin/users');
});

Route::get('/admin/doctors', function () {
    return view('/admin/doctors');
});

Route::get('/admin/events', function () {
    return view('/admin/events');
});

Route::get('/admin/old_events', function () {
    return view('/admin/old_events');
});

Route::get('/admin/professions', function () {
    return view('/admin/professions');
});

Route::get('/admin/paramedical_services', function () {
    return view('/admin/paramedical_services');
});





Route::get('/secretary/users', function () {
    return view('/secretary/users');
});



Route::get('/secretary/appointments', function () {
    return view('/secretary/appointments');
});


Route::get('/secretary/doctors', function () {
    return view('/secretary/doctors');
});


Route::get('/secretary/appointment_reservations', function () {
    return view('/secretary/appointment_reservations');
});

Route::get('/secretary/sessions', function () {
    return view('/secretary/sessions');
});


Route::get('/secretary/reserved_sessions', function () {
    return view('/secretary/reserved_sessions');
});
