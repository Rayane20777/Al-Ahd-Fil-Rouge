<?php
namespace App\Repositories\Interfaces;

Interface SessionRepositoryInterface{
    
    public function allSession();
    public function storeSession($data);
    public function findSession($id);
    public function updateSession($data, $id); 
    public function destroySession($id);
    public function makeSession($id,$member_id);
    // public function approveSession($id);
    // public function denySession($id);
}

