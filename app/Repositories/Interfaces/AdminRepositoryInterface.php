<?php
namespace App\Repositories\Interfaces;

Interface AdminRepositoryInterface{
    
    public function allMember();
    public function allSecretary();
    public function userBan($id);
    public function secretaryBan($id);
}

