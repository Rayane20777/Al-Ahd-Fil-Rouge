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

    public function storeMemberParamedicalService($item, $member)
    {
        return MemberParamedicalService::create([
            'member_id' => $member,
            'paramedical_service_id' => $item
        ]);
    }

    

}
