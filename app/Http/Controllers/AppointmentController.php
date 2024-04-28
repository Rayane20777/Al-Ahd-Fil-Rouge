<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Interfaces\AppointmentServiceInterface;
use App\Http\Requests\AppointmentRequest;
use Exception;
use Illuminate\Support\Facades\View; 


class AppointmentController extends Controller
{ 
    private $service;

    public function __construct(AppointmentServiceInterface $service){
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
            $appointments = $this->service->allAppointment();
            return view('/secretary/appointments', ['appointments' => $appointments]);
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function memberIndex(){
        try {
            $appointments = $this->service->allAppointment();
            return view('/member/appointments', ['appointments' => $appointments]);
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function store(AppointmentRequest $request)
    {
        
        try {
            $data = $request->validated();
            $this->service->storeAppointment($data);
            return redirect()->route('appointments.index')->with('success', 'Appointment created successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function update(AppointmentRequest $request, $id)
    {
        try {
            $this->service->updateAppointment($request->all(), $id);
            return redirect()->route('appointments.index')->with('success', 'Appointment updated successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    { 
        try {
            $this->service->destroyAppointment($id);
            return redirect()->route('appointments.index')->with('success', 'Appointment deleted successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function makeAppointment(Request $request,$id)
    {
        
        try {
            $this->service->makeAppointment($id);
            return redirect()->route('/')->with('success', 'Appointment updated successfully');
        } catch (Exception $e) {
            return View::make('error')->with('message', $e->getMessage());
        }
    }

    public function approveAppointment(Request $request , $id){
        try {
            $this->service->approveAppointment($id);
            return redirect()->route('secretary_appointment_reservations.index')->with('success', 'Appointment updated successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function denyAppointment(Request $request , $id){
        try {
            $this->service->denyAppointment($id);
            return redirect()->route('secretary_appointment_reservations.index')->with('success', 'Appointment updated successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
