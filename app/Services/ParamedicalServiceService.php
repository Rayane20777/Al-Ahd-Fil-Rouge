<?php

namespace App\Services;

use App\Repositories\Interfaces\ParamedicalServiceRepositoryInterface;
use App\Services\Interfaces\ParamedicalServiceServiceInterface;
use App\Traits\ResponseTrait;


class ParamedicalServiceService implements ParamedicalServiceServiceInterface
{
    use ResponseTrait;
    private ParamedicalServiceRepositoryInterface $repository;

    public function __construct(ParamedicalServiceRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function allParamedicalService()
    {

    }
    public function storeParamedicalService($data)
    {
        $this->repository->storeParamedicalService($data);
    }
    public function findParamedicalService($id)
    {

    }
    public function updateParamedicalService($data,$id)
    {
        $this->repository->updateParamedicalService($data,$id);

    }
    public function destroyParamedicalService($id)
    {
        $this->repository->destroyParamedicalService($id);

    }
  
    

}
