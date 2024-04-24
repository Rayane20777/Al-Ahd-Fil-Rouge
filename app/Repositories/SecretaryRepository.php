<?php


namespace App\Repositories;

use App\Repositories\Interfaces\SecretaryRepositoryInterface;
use App\Models\Member;

class SecretaryRepository implements SecretaryRepositoryInterface
{

    

    public function allMember()
    {
        return Member::with('user')->get();
    }
}