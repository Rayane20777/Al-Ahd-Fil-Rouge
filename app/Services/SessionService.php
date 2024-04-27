<?php

namespace App\Services;

use App\Repositories\Interfaces\SessionRepositoryInterface;
use App\Services\Interfaces\SessionServiceInterface;
use App\Traits\ResponseTrait;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;


class SessionService implements SessionServiceInterface
{
    use ResponseTrait;
    private SessionRepositoryInterface $repository;

    public function __construct(SessionRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function allSession()
    {
        return $this->repository->allSession();

    }

    public function allDoctor()
    {
        return $this->repository->allDoctor();

    }

    public function allParamedicalService()
    {
        return $this->repository->allParamedicalService();

    }

    public function memberSession()
    {
        return $this->repository->memberSession();

    }

    public function storeSession($data)
    {
        return $this->repository->storeSession($data);
    }
    public function findSession($id)
    {

    }
    public function updateSession($data,$id)
    {
        return $this->repository->updateSession($data,$id);

    }
    public function destroySession($id)
    {
        return $this->repository->destroySession($id);

    }
    public function makeSession($id)
    {

        $user = JWTAuth::user();

        $member_id = $user->member()->first()->id;

        return $this->repository->makeSession($id, $member_id);

    }
     
    public function approveSession($id){

        $this->repository->approveSession($id);

    }

    public function denySession($id){
        
        $this->repository->denySession($id);

    }
    

}