<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\Interfaces\ParamedicalServiceServiceInterface;
use Illuminate\Http\Request;
use App\Http\Requests\ParamedicalServiceRequest;
use Exception;

class ParamedicalServiceController extends Controller
{
    private $service;

    public function __construct(ParamedicalServiceServiceInterface $service){
        $this->service = $service;

    }
    /*
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index()
    {
        $service = $this->service->allParamedicalService();
        return response()->json($service,201);

    }

    public function store(ParamedicalServiceRequest $request)
    {
        $data = $request->validated();



        try {
            $data = $this->service->storeParamedicalService($data);
        } catch (Exception $e){
            return $this->responseError($e->getMessage());
        }

        return response()->json($data,201);
    }

    public function update(ParamedicalServiceRequest $request, $id)
    {
      try{
        $this->service->updateParamedicalService($request->all(), $id);

      }catch(Exception $e){
        return $this->responseError($e->getMessage()); 

      }

        return response()->json($request,201);
    }

    public function destroy($id)
    {
        try{
            $this->service->destroyParamedicalService($id);

        }catch(Exception $e){
            return $this->responseError($e->getMessage()); 
        }
        return response()->json('deleted');
    }
}
