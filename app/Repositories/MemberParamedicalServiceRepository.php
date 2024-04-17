<?php

namespace App\Repositories;

use App\Models\MemberParamedicalService;
use App\Repositories\Interfaces\MemberParamedicalServiceRepositoryInterface;

class MemberParamedicalServiceRepository implements MemberParamedicalServiceRepositoryInterface
{
    public function allMemberParamedicalService()
    {
        return MemberParamedicalService::all();
    }

    public function storeMemberParamedicalService(array $data)
    {
        return MemberParamedicalService::create($data);
    }
}
