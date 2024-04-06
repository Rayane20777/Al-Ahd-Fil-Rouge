<?php

namespace App\Services\InterfaceS;


interface AppointmentServiceInterface
{
    public function allAppointment();
    public function storeAppointment($data);
    public function findAppointment($id);
    public function updateAppointment($data, $id); 
    public function destroyAppointment($id);
    public function makeAppointment($id,$member_id);
}
