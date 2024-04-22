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
        return $this->repository->allParamedicalService();

    }
    public function storeParamedicalService($data)
    {
        return $this->repository->storeParamedicalService($data);
    }
    public function findParamedicalService($id)
    {

    }
    public function updateParamedicalService($data,$id)
    {
        return $this->repository->updateParamedicalService($data,$id);

    }
    public function destroyParamedicalService($id)
    {
        return $this->repository->destroyParamedicalService($id);

    }
  
    

}
