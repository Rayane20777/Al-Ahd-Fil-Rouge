<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Interfaces\AppointmentServiceInterface;
use App\Http\Requests\AppointmentRequest;
use Illuminate\Support\Facades\Auth;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;
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

    // public function makeAppointment(Request $request, $id)
    // {
    //     $user = JWTAuth::user();
        
    //     $member_id = $user->member()->first()->id;

    //     $this->appointmentRepository->makeAppointment($id,$member_id);
    //     return response()->json('reserved succesfuly');
    // }
}
