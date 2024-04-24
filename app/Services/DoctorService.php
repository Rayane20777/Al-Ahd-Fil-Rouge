<?php

namespace App\Services;

use App\Repositories\Interfaces\DoctorRepositoryInterface;
use App\Services\Interfaces\DoctorServiceInterface;
use App\Traits\ResponseTrait;

class DoctorService implements DoctorServiceInterface
{
    use ResponseTrait;
    private DoctorRepositoryInterface $repository;

    public function __construct(DoctorRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function allDoctor()
    {
        return $this->repository->allDoctor();
    }

    public function allProfession()
    {
        return $this->repository->allProfession();
    }

    
    public function storeDoctor($data)
    {
        return $this->repository->storeDoctor($data);
    }
    
    public function updateDoctor($data,$id)
    {
        return $this->repository->updateDoctor($data,$id);

    }

    public function destroyDoctor($id)
    {
        return $this->repository->destroyDoctor($id);

    }
}