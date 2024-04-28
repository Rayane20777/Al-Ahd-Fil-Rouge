<?php


namespace App\Repositories;

use App\Repositories\Interfaces\MemberRepositoryInterface;
use App\Models\User;


class MemberRepository implements MemberRepositoryInterface
{

    

    public function profile($user)
    {
       
        return $user->load('member');
    }

    

    
}