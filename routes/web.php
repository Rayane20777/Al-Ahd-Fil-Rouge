<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfessionController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ParamedicalServiceController;
use App\Http\Controllers\MemberParamedicalServiceController;
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





Route::get('/events', function () {
    return view('events');
});


Route::get('/profile', function () {
    return view('profile');
});

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store'])->name('register');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);


///////////////////////////////////////////////////////////////////////


Route::get('/admin/users', function () {
    return view('/admin/users');
})->name('admin.users');


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


///////////////////////////////////////////////////////////////////////


Route::get('/secretary/users', function () {
    return view('/secretary/users');
})->name('secretary.users');

Route::get('/secretary/doctors', function () {
    return view('/secretary/doctors');
});


Route::get('/secretary/appointments', function () {
    return view('/secretary/appointments');
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


//////////////////////////////////////////////////////////////////////////////

Route::get('/member/home', function () {
    return view('/member/home');
})->name('member.home');

Route::get('/member/sessions', function () {
    return view('/member/sessions');
});

Route::get('/member/appointments', function () {
    return view('/member/appointments');
})->name('appointments.member.index');






Route::controller(ProfessionController::class)->group(function () {
    Route::get('profession/index', 'index')->name('professions.index');
    Route::post('profession/store', 'store');
    Route::post('profession/update/{id}', 'update');
    Route::post('profession/destroy/{id}', 'destroy');
});


Route::controller(EventController::class)->group(function () {
    Route::get('/event/index', 'index')->name('events.index');
    Route::post('/event/store', 'store');
    Route::post('/event/update/{id}', 'update');
    Route::post('/event/destroy/{id}', 'destroy');
});

Route::controller(AppointmentController::class)->group(function () {
    Route::get('/appointment/index', 'index')->name('appointments.index');
    Route::post('/appointment/store', 'store');
    Route::post('/appointment/update/{id}', 'update');
    Route::post('/appointment/destroy/{id}', 'destroy');
    Route::post('/appointment/make/{id}', 'makeAppointment');
    Route::post('/appointment/approve/{id}', 'approveAppointment');
    Route::post('/appointment/deny/{id}', 'denyAppointment');
});


Route::controller(ParamedicalServiceController::class)->group(function () {
    Route::get('/paramedical_service/index', 'index')->name('paramedical_services.index');
    Route::post('/paramedical_service/store', 'store');
    Route::post('/paramedical_service/update/{id}', 'update');
    Route::post('/paramedical_service/destroy/{id}', 'destroy');
});


Route::controller(SessionController::class)->group(function () {
    Route::get('/session/index', 'index')->name('sessions.index');
    Route::post('/session/store', 'store');
    Route::post('/session/update/{id}', 'update');
    Route::post('/session/destroy/{id}', 'destroy');
    Route::post('/session/make/{id}', 'makeSession');
});


Route::controller(MemberParamedicalServiceController::class)->group(function () {
    Route::post('/member_paramedical_service/index', 'index');
    Route::post('/member_paramedical_service/store', 'store');
    Route::post('/paramedical_service/update/{id}', 'update');
    Route::post('/paramedical_service/destroy/{id}', 'destroy');
});