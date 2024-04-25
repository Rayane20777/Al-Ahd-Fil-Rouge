<?php


namespace App\Repositories;

use App\Repositories\Interfaces\SecretaryRepositoryInterface;
use App\Models\Member;
use App\Models\AppointmentReservation;
use App\Models\ParamedicalSessionReservation;

class SecretaryRepository implements SecretaryRepositoryInterface
{

    

    public function allMember()
    {
        return Member::with('user')->get();
    }

    

    public function allAppReservation()
    {
        return AppointmentReservation::with('member.user','appointment')->get();
    }



    public function allSessReservation()
    {
        return ParamedicalSessionReservation::with('member.user','session.doctors.profession','session.paramedical_service')->get();
    }
    
}