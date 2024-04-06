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

    }
    public function storeProfession($data)
    {
        $this->repository->storeProfession($data);
    }
    public function findProfession($id)
    {

    }
    public function updateProfession($data,$id)
    {
        $this->repository->updateProfession($data,$id);

    }
    public function destroyProfession($id)
    {
        $this->repository->destroyProfession($id);

    }
  
    

}
