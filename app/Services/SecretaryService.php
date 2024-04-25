<?php

namespace App\Services;

use App\Repositories\Interfaces\SecretaryRepositoryInterface;
use App\Services\Interfaces\SecretaryServiceInterface;
use App\Traits\ResponseTrait;


class SecretaryService implements SecretaryServiceInterface
{
    use ResponseTrait;
    private SecretaryRepositoryInterface $repository;

    public function __construct(SecretaryRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function allMember()
    {
        return $this->repository->allMember();
    }

    public function allAppReservation()
    {
        return $this->repository->allAppReservation();
    }

    public function allSessReservation()
    {
        return $this->repository->allSessReservation();
    }
}