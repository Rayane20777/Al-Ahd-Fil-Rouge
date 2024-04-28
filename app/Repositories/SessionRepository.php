<?php


namespace App\Repositories;

use App\Repositories\Interfaces\SessionRepositoryInterface;
use App\Models\ParamedicalSessionReservation;
use App\Models\Session;
use App\Models\Doctor;
use App\Models\ParamedicalService;

class SessionRepository implements SessionRepositoryInterface
{

    

    public function allSession()
    {
        return Session::with('doctors', 'paramedical_service')->get();    
    }
    public function memberSession()
    {
        $user = auth()->user();
        
        return $user->member()->first()->paramedical_service()->with('session.doctors.profession','session.paramedical_service_reservation')
        ->get()->pluck('session')->flatten();
   
    }

    public function allDoctor()
    {
        return Doctor::all();
    }

    public function allParamedicalService()
    {
        return ParamedicalService::all();
    }

    public function storeSession($data)
    {
        return Session::create($data);
    }

    public function findSession($id)
    {
        return Session::find($id);
    }

    public function updateSession($data, $id)
    {
        $session = Session::where('id', $id)->first();
        $session->date = $data['date'];
        $session->departure_hour = $data['departure_hour'];
        $session->ending_hour = $data['ending_hour'];
        $session->paramedical_service_id = $data['paramedical_service_id'];
        $session->doctor_id = $data['doctor_id'];
        $session->save();
    }

    public function destroySession($id)
    {
        $Session = Session::find($id);
        $Session->delete();
    }

    public function makeSession($id,$member_id)
    {

        
        return ParamedicalSessionReservation::create([
        'session_id' => $id,
        'member_id' => $member_id,
            ]
        );
    }

    public function approveSession($id)
    {
        $Session = ParamedicalSessionReservation::find($id);
        $Session->status = 'approved';
        $Session->save();
        
    }

    public function denySession($id)
    {
        $Session = ParamedicalSessionReservation::find($id);
        $Session->status = 'denied';
        $Session->save();
        
    }
}