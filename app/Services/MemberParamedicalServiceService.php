<?php

namespace App\Services;

use App\Repositories\Interfaces\MemberParamedicalServiceRepositoryInterface;
use App\Services\Interfaces\MemberParamedicalServiceServiceInterface;

class MemberParamedicalServiceService implements MemberParamedicalServiceServiceInterface
{
    private $repository;

    public function __construct(MemberParamedicalServiceRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function allMemberParamedicalService()
    {
        return $this->repository->allMemberParamedicalService();
    }

    public function storeMemberParamedicalServices(array $data)
    {
        foreach ($data as $item) {
            $this->repository->storeMemberParamedicalService($item);
        }
    }
}
