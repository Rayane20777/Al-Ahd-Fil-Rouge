<?php
namespace App\Repositories\Interfaces;

Interface ProfessionRepositoryInterface{
    
    public function allProfession();
    public function storeProfession($data);
    public function findProfession($id);
    public function updateProfession($data, $id); 
    public function destroyProfession($id);
}