<?php

namespace App\Services\InterfaceS;


interface DoctorServiceInterface
{
    public function allDoctor();
    public function allProfession();
    public function storeDoctor($data);
    public function updateDoctor($data, $id); 
    public function destroyDoctor($id);

}
