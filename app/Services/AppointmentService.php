<?php

namespace App\Services;

use App\Repositories\Interfaces\AppointmentRepositoryInterface;
use App\Services\Interfaces\AppointmentServiceInterface;
use App\Traits\ResponseTrait;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;


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
        return $this->repository->allAppointment();
    }
    public function storeAppointment($data)
    {
        return $this->repository->storeAppointment($data);
    }
    public function findAppointment($id)
    {

    }
    public function updateAppointment($data,$id)
    {
        return $this->repository->updateAppointment($data,$id);

    }
    public function destroyAppointment($id)
    {
        return $this->repository->destroyAppointment($id);

    }
    public function makeAppointment($id)
    {


        $member_id = auth()->user()->member()->first()->id;
        return $this->repository->makeAppointment($id, $member_id);

    }
     
    public function approveAppointment($id){

        return $this->repository->approveAppointment($id);

    }

    public function denyAppointment($id){
        
        return $this->repository->denyAppointment($id);

    }
    

}