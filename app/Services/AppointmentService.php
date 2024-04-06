<?php

namespace App\Services;

use App\Repositories\Interfaces\AppointmentRepositoryInterface;
use App\Services\Interfaces\AppointmentServiceInterface;
use App\Traits\ResponseTrait;


class AppointmentService implements AppointmentServiceInterface
{
    use ResponseTrait;
    private AppointmentRepositoryInterface $repository;

    public function __construct(AppointmentRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function allAppointment()
    {

    }
    public function storeAppointment($data)
    {
        $this->repository->storeAppointment($data);
    }
    public function findAppointment($id)
    {

    }
    public function updateAppointment($data,$id)
    {
        $this->repository->updateAppointment($data,$id);

    }
    public function destroyAppointment($id)
    {
        $this->repository->destroyAppointment($id);

    }
    public function makeAppointment($id,$member_id)
    {

    }
    

}