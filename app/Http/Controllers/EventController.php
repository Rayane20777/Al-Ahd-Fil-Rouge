<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\EventRequest;
use App\Services\Interfaces\EventServiceInterface;
use Exception;

class EventController extends Controller
{
    private $service;

    public function __construct(EventServiceInterface $service){
        $this->service = $service;

    }
    /*
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index()
    {
        $events = $this->service->allEvent();
        return response()->json($events,201);

    }

    public function store(EventRequest $request)
    {
        $data = $request->validated();

        try {
            $data = $this->service->storeEvent($data);
        } catch (Exception $e){
            return $this->responseError($e->getMessage());
        }

        

        return response()->json($data,201);
    }

    public function update(EventRequest $request, $id)
    {
        try{
            $this->service->updateEvent($request->all(), $id);

        }catch(Exception $e){
            return $this->responseError($e->getMessage()); 

        }
      

        return response()->json($request,201);
    }

    public function destroy($id)
    {
        try{
            $this->service->destroyEvent($id);

        }catch(Exception $e){
            return $this->responseError($e->getMessage()); 
        }
        return response()->json('deleted');
    }


}
