<?php


namespace App\Repositories;

use App\Repositories\Interfaces\AppointmentRepositoryInterface;
use App\Models\AppointmentReservation;
use App\Models\Appointment;

class AppointmentRepository implements AppointmentRepositoryInterface
{

    

    public function allAppointment()
    {
        return Appointment::all();
    }

    public function storeAppointment($data)
    {
        return Appointment::create($data);
    }

    public function findAppointment($id)
    {
        return Appointment::find($id);
    }

    public function updateAppointment($data, $id)
    {
        $appointment = Appointment::where('id', $id)->first();
        $appointment->date = $data['date'];
        $appointment->departure_hour = $data['departure_hour'];
        $appointment->ending_hour = $data['ending_hour'];
        $appointment->save();
    }

    public function destroyAppointment($id)
    {
        $appointment = Appointment::find($id);
        $appointment->delete();
    }

    public function makeAppointment($id,$member_id)
    {

        
        return AppointmentReservation::create([
        'appointment_id' => $id,
        'member_id' => $member_id,
            ]
        );
    }

    public function approveAppointment($id)
    {
        $appointment = AppointmentReservation::find($id);
        $appointmentEmail = AppointmentReservation::find($id)->with('appointment')->get();
        $appointment->status = 'approved';
        $appointment->save();
        
    }

    public function denyAppointment($id)
    {
        $appointment = AppointmentReservation::find($id);
        $appointment->status = 'denied';
        $appointment->save();
        
    }
}