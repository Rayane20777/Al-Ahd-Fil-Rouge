<?php

namespace App\Services;

use App\Repositories\Interfaces\AdminRepositoryInterface;
use App\Services\Interfaces\AdminServiceInterface;
use App\Traits\ResponseTrait;


class AdminService implements AdminServiceInterface
{
    use ResponseTrait;
    private AdminRepositoryInterface $repository;

    public function __construct(AdminRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function allMember()
    {
        return $this->repository->allMember();
    }
}