<?php

namespace App\Services\InterfaceS;


interface AdminServiceInterface
{
    public function allMember();
    public function allSecretary();
    public function userBan($id);
    public function secretaryBan($id);
    
}
