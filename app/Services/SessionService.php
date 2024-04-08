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

    }
    public function storeSession($data)
    {
        $this->repository->storeSession($data);
    }
    public function findSession($id)
    {

    }
    public function updateSession($data,$id)
    {
        $this->repository->updateSession($data,$id);

    }
    public function destroySession($id)
    {
        $this->repository->destroySession($id);

    }
    public function makeSession($id)
    {

        $user = JWTAuth::user();

        $member_id = $user->member()->first()->id;

        $this->repository->makeSession($id, $member_id);

    }
     
    // public function approveSession($id){

    //     $this->repository->approveSession($id);

    // }

    // public function denySession($id){
        
    //     $this->repository->denySession($id);

    // }
    

}