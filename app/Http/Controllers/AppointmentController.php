<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Interfaces\AppointmentServiceInterface;
use App\Http\Requests\AppointmentRequest;
use Exception;


class AppointmentController extends Controller
{ 
    private $service;

    public function __construct(AppointmentServiceInterface $service){
        $this->service = $service;

    }
    /*
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index()
    {
        $service = $this->service->allAppointment();
        return response()->json($service,201);

    }

    public function store(AppointmentRequest $request)
    {
        
        $data = $request->validated();

        try {
            $data = $this->service->storeappointment($data);
        } catch (Exception $e){
            return $this->responseError($e->getMessage());
        }


        return response()->json($data,201);
    }

    public function update(AppointmentRequest $request, $id)
    {
      try{
        $this->service->updateAppointment($request->all(), $id);
    }catch(Exception $e){
        return $this->responseError($e->getMessage()); 
    }
        return response()->json($request,201);
    }

    public function destroy($id)
    { 
        try{
            $this->service->destroyAppointment($id);

        }catch(Exception $e){
            return $this->responseError($e->getMessage()); 
        }
        return response()->json('deleted');
    }

    public function makeAppointment(Request $request,$id)
    {
        
        $this->service->makeAppointment($id);

        return response()->json('reserved succesfuly');
    }

    public function approveAppointment(Request $request , $id){
        $this->service->approveAppointment($id);

        return response()->json('approved succesfully');
    }

    public function denyAppointment(Request $request , $id){
        $this->service->denyAppointment($id);

        return response()->json('denied succesfully');
    }
}
