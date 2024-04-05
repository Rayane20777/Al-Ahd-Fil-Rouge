<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\AppointmentRepositoryInterface;
use App\Http\Requests\AppointmentRequest;
use Illuminate\Support\Facades\Auth;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;

class AppointmentController extends Controller
{
    private $appointmentRepository;

    public function __construct(AppointmentRepositoryInterface $appointmentRepository){
        $this->appointmentRepository = $appointmentRepository;

    }
    /*
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index()
    {
        $appointments = $this->appointmentRepository->allAppointment();
        return response()->json($appointments,201);

    }

    public function store(AppointmentRequest $request)
    {
        $data = $request->validated();

        $this->appointmentRepository->storeAppointment($data);

        return response()->json($data,201);
    }

    public function update(AppointmentRequest $request, $id)
    {
      
        $this->appointmentRepository->updateAppointment($request->all(), $id);

        return response()->json($request,201);
    }

    public function destroy($id)
    {
        $this->appointmentRepository->destroyAppointment($id);

        return response()->json('deleted');
    }

    public function makeAppointment(Request $request, $id)
    {
        $user = JWTAuth::user();
        
        $member_id = $user->member()->first()->id;

        $this->appointmentRepository->makeAppointment($id,$member_id);
        return response()->json('reserved succesfuly');
    }
}
