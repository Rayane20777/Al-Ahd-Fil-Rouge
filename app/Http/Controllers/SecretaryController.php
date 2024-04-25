<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Interfaces\SecretaryServiceInterface;
use Exception;
use Illuminate\Support\Facades\View; 


class SecretaryController extends Controller
{
    private $service;

    public function __construct(SecretaryServiceInterface $service){
        $this->service = $service;

    }
    /*
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        try {
            $users = $this->service->allMember();
            $paramedicalService = $this->service->allParamedicalService();
            return view('/secretary/users', compact('users','paramedicalService'));
        } catch (Exception $e) {
            report($e);
            return View::make('error')->with('message', $e->getMessage());
               }
    }

    public function appReservation()
    {
        try {
            $appoitmentReservations = $this->service->allAppReservation();
            return view('/secretary/appointment_reservations', compact('appoitmentReservations'));
        } catch (Exception $e) {
            report($e);
            return View::make('error')->with('message', $e->getMessage());
               }
    }

    public function sessReservation()
    {
        try {
            $sessionReservations = $this->service->allSessReservation();
            return view('/secretary/reserved_sessions', compact('sessionReservations'));
        } catch (Exception $e) {
            report($e);
            return View::make('error')->with('message', $e->getMessage());
               }
    }
}
