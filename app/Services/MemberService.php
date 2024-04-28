<?php

namespace App\Services;

use App\Repositories\Interfaces\MemberRepositoryInterface;
use App\Services\Interfaces\MemberServiceInterface;
use App\Traits\ResponseTrait;


class MemberService implements MemberServiceInterface
{
    use ResponseTrait;
    private MemberRepositoryInterface $repository;

    public function __construct(MemberRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function profile()
    {
        $user = auth()->user();
        return $this->repository->profile($user);
    }
}