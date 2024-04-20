<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ProfessionController;
use App\Http\Controllers\API\EventController;
use App\Http\Controllers\API\SessionController;
use App\Http\Controllers\API\AppointmentController;
use App\Http\Controllers\API\ParamedicalServiceController;
use App\Http\Controllers\API\MemberParamedicalServiceController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('doctor', 'registerDoctor');
    Route::post('member', 'registerMember');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
});


Route::controller(ProfessionController::class)->group(function () {
    Route::post('profession/index', 'index');
    Route::post('profession/store', 'store');
    Route::post('profession/update/{id}', 'update');
    Route::post('profession/destroy/{id}', 'destroy');
});


Route::controller(EventController::class)->group(function () {
    Route::post('/event/index', 'index');
    Route::post('/event/store', 'store');
    Route::post('/event/update/{id}', 'update');
    Route::post('/event/destroy/{id}', 'destroy');
});

Route::controller(AppointmentController::class)->group(function () {
    Route::post('/appointment/index', 'index');
    Route::post('/appointment/store', 'store');
    Route::post('/appointment/update/{id}', 'update');
    Route::post('/appointment/destroy/{id}', 'destroy');
    Route::post('/appointment/make/{id}', 'makeAppointment');
    Route::post('/appointment/approve/{id}', 'approveAppointment');
    Route::post('/appointment/deny/{id}', 'denyAppointment');
});


Route::controller(ParamedicalServiceController::class)->group(function () {
    Route::post('/paramedical_service/index', 'index');
    Route::post('/paramedical_service/store', 'store');
    Route::post('/paramedical_service/update/{id}', 'update');
    Route::post('/paramedical_service/destroy/{id}', 'destroy');
});


Route::controller(SessionController::class)->group(function () {
    Route::post('/session/index', 'index');
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