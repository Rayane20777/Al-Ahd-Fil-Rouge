<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\ParamedicalServiceRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Requests\ParamedicalServiceRequest;

class ParamedicalServiceController extends Controller
{
    private $paramedicalServiceRepository;

    public function __construct(ParamedicalServiceRepositoryInterface $paramedicalServiceRepository){
        $this->paramedicalServiceRepository = $paramedicalServiceRepository;

    }
    /*
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index()
    {
        $paramedicalServices = $this->paramedicalServiceRepository->allParamedicalService();
        return response()->json($paramedicalServices,201);

    }

    public function store(ParamedicalServiceRequest $request)
    {
        $data = $request->validated();

        $this->paramedicalServiceRepository->storeParamedicalService($data);

        return response()->json($data,201);
    }

    public function update(ParamedicalServiceRequest $request, $id)
    {
      
        $this->paramedicalServiceRepository->updateParamedicalService($request->all(), $id);

        return response()->json($request,201);
    }

    public function destroy($id)
    {
        $this->paramedicalServiceRepository->destroyParamedicalService($id);

        return response()->json('deleted');
    }
}
