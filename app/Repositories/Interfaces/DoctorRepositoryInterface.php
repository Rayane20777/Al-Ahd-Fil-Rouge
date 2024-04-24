<?php
namespace App\Repositories\Interfaces;

Interface DoctorRepositoryInterface{
    
    public function allDoctor();
    public function allProfession();
    public function storeDoctor($data);
    public function findDoctor($id);
    public function updateDoctor($data, $id); 
    public function destroyDoctor($id);
}