<?php

namespace App\Repositories\Interfaces;

Interface MemberParamedicalServiceRepositoryInterface
{
    public function allMemberParamedicalService();
    public function storeMemberParamedicalService($item, $member);
}
