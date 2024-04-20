<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\MemberParamedicalServiceRequest;
use App\Services\Interfaces\MemberParamedicalServiceServiceInterface;
use Exception;
use App\Traits\ResponseTrait;

class MemberParamedicalServiceController extends Controller
{
    use ResponseTrait;

    private $service;

    public function __construct(MemberParamedicalServiceServiceInterface $service){
        $this->service = $service;
    }

    public function index(){
        $memberParamedicalService = $this->service->allMemberParamedicalService();
        return response()->json($memberParamedicalService, 200);
    }


    public function store(MemberParamedicalServiceRequest $request){
        $data = $request->validated();
        try {
            $this->service->storeMemberParamedicalServices($data);
        } catch (Exception $e){
            return $this->responseError($e->getMessage());
        }
        // return $this->responseSuccess(null, "Member paramedical services created successfully", 201);
        return response()->json('hello', 200);
    }


    
}
