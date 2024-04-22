<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\Interfaces\ProfessionServiceInterface;
use Illuminate\Http\Request;
use App\Http\Requests\ProfessionRequest;
use Exception;

class ProfessionController extends Controller
{
    private $service;

    public function __construct(ProfessionServiceInterface $service){
        $this->service = $service;

    }
    /*
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index()
    {
        $service = $this->service->allProfession();
        return response()->json($service,201);

    }

    public function store(ProfessionRequest $request)
    {
        $data = $request->validated();

        

        try {
            $data = $this->service->storeProfession($data);
        } catch (Exception $e){
            return $this->responseError($e->getMessage());
        }

        return response()->json($data,201);
    }

    public function update(ProfessionRequest $request, $id)
    {
      try{
        $this->service->updateProfession($request->all(), $id);
      }catch(Exception $e){
        return $this->responseError($e->getMessage()); 
      }

        return response()->json($request,201);
    }

    public function destroy($id)
    {
        try{
            $this->service->destroyProfession($id);

        }catch(Exception $e){
            return $this->responseError($e->getMessage()); 
        }

        return response()->json('deleted');
    }

}
