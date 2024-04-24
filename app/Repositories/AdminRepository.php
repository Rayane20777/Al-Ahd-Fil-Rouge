<?php


namespace App\Repositories;

use App\Repositories\Interfaces\AdminRepositoryInterface;
use App\Models\Member;

class AdminRepository implements AdminRepositoryInterface
{

    

    public function allMember()
    {
        return Member::with('user')->get();
    }
}