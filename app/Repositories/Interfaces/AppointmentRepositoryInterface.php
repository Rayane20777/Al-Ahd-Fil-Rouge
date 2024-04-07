<?php
namespace App\Repositories\Interfaces;

Interface AppointmentRepositoryInterface{
    
    public function allAppointment();
    public function storeAppointment($data);
    public function findAppointment($id);
    public function updateAppointment($data, $id); 
    public function destroyAppointment($id);
    public function makeAppointment($id,$member_id);
    public function approveAppointment($id);
    public function denyAppointment($id);
}

