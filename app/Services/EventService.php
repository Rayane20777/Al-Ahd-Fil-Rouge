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
        return $this->repository->allEvent();
    }
    public function storeEvent($data)
    {
        return $this->repository->storeEvent($data);
    }

    public function updateEvent($data,$id)
    {
        return $this->repository->updateEvent($data,$id);

    }
    public function destroyEvent($id)
    {
        return $this->repository->destroyEvent($id);

    }
  
    

}
