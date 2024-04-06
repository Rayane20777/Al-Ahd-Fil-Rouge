<?php

namespace App\Services\InterfaceS;


interface ProfessionServiceInterface
{
    public function allProfession();
    public function storeProfession($data);
    public function findProfession($id);
    public function updateProfession($data, $id); 
    public function destroyProfession($id);
}
