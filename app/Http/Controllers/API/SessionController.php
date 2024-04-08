<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ParamedicalService;
use App\Services\Interfaces\SessionServiceInterface;
use App\Http\Requests\SessionRequest;
use App\Models\ParamedicalServiceReservation;
use Illuminate\Http\Request;
use Exception;

class SessionController extends Controller
{
    private $service;

    public function __construct(SessionServiceInterface $service){
        $this->service = $service;
    }
    public function index() {
        $service = $this->service->allSession();
        return response()->json($service,201);
    }

    public function store(SessionRequest $request){
        $data = $request->validated();

        $this->service->storeSession($data);

        return response()->json($data,201);
    }

    public function update(SessionRequest $request , $id){
        try{
            $this->service->updateSession($request->all(), $id);
        }catch(Exception $e){
            return $this->responseError($e->getMessage()); 
        }
            return response()->json($request,201);
    }
    public function destroy($id)
    { 
        try{
            $this->service->destroySession($id);

        }catch(Exception $e){
            return $this->responseError($e->getMessage()); 
        }
        return response()->json('deleted');
    }
    public function makeSession(Request $request,$id)
    {
        
        $this->service->makeSession($id);

        return response()->json('reserved succesfuly');
    }
   

}
