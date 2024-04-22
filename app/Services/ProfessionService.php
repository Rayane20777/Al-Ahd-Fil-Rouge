<?php

namespace App\Services;

use App\Repositories\Interfaces\ProfessionRepositoryInterface;
use App\Services\Interfaces\ProfessionServiceInterface;
use App\Traits\ResponseTrait;


class ProfessionService implements ProfessionServiceInterface
{
    use ResponseTrait;
    private ProfessionRepositoryInterface $repository;

    public function __construct(ProfessionRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function allProfession()
    {
        return $this->repository->allProfession();

    }
    public function storeProfession($data)
    {
        return $this->repository->storeProfession($data);
    }
    public function findProfession($id)
    {

    }
    public function updateProfession($data,$id)
    {
        return $this->repository->updateProfession($data,$id);

    }
    public function destroyProfession($id)
    {
        return $this->repository->destroyProfession($id);

    }
  
    

}
