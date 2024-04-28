<?php


namespace App\Repositories;

use App\Repositories\Interfaces\SessionRepositoryInterface;
use App\Models\ParamedicalSessionReservation;
use App\Models\Session;
use App\Models\Doctor;
use App\Models\ParamedicalService;
use Illuminate\Support\Facades\DB;

class SessionRepository implements SessionRepositoryInterface
{

    

    public function allSession()
    {
        return Session::with('doctors', 'paramedical_service')->get();    
    }
    public function memberSession()
    {
        $user = auth()->user();
        
        // return $user->member()->first()->paramedical_service()->with('session.doctors.profession','session.paramedical_service_reservation')
        // ->get()->pluck('session')->flatten();

        $results = DB::select("SELECT  e.id, e.date, e.departure_hour, e.ending_hour, f.status, d.name
        FROM users a 
        INNER JOIN members b 
        ON b.user_id = a.id 
        INNER JOIN menbers_paramedical_services c 
        ON c.member_id = b.id
        INNER JOIN paramedical_services d
        ON c.paramedical_service_id = d.id
        INNER JOIN sessions e
        ON e.paramedical_service_id = d.id
        LEFT JOIN paramedical_session_reservations f
        ON f.session_id = e.id 
        WHERE a.id = {$user->id}
        AND (f.status = 'denied' OR f.status IS NULL)
        ORDER BY e.date;");

        // dd($results);

        return $results;

    }

    public function filter($paramedical_service, $session){
        $user = auth()->user();
        $results = DB::select("SELECT  e.id, e.date, e.departure_hour, e.ending_hour, f.status
        FROM users a 
        INNER JOIN members b 
        ON b.user_id = a.id 
        INNER JOIN menbers_paramedical_services c 
        ON c.member_id = b.id
        INNER JOIN paramedical_services d
        ON c.paramedical_service_id = d.id
        INNER JOIN `sessions` e
        ON e.paramedical_service_id = d.id
        LEFT JOIN paramedical_session_reservations f
        ON f.session_id = e.id 
        WHERE a.id = {$user->id}
        AND (f.status = 'denied' OR f.status IS NULL)
        AND (d.name = '{$paramedical_service}' AND e.date = '{$session}')
        ORDER BY e.date DESC;");

        // dd($results, $paramedical_service, $session);
        return $results;
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