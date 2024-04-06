<?php

namespace App\Services;

use App\Repositories\Interfaces\EventRepositoryInterface;
use App\Services\Interfaces\EventServiceInterface;
use App\Traits\ResponseTrait;


class EventService implements EventServiceInterface
{
    use ResponseTrait;
    private EventRepositoryInterface $repository;

    public function __construct(EventRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function allEvent()
    {

    }
    public function storeEvent($data)
    {
        $this->repository->storeEvent($data);
    }
    public function findEvent($id)
    {

    }
    public function updateEvent($data,$id)
    {
        $this->repository->updateEvent($data,$id);

    }
    public function destroyEvent($id)
    {
        $this->repository->destroyEvent($id);

    }
  
    

}
