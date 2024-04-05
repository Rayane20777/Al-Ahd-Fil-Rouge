<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\EventRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Requests\EventRequest;

class EventController extends Controller
{
    private $eventRepository;

    public function __construct(EventRepositoryInterface $eventRepository){
        $this->eventRepository = $eventRepository;

    }
    /*
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index()
    {
        $events = $this->eventRepository->allEvent();
        return response()->json($events,201);

    }

    public function store(EventRequest $request)
    {
        $data = $request->validated();

        $this->eventRepository->storeEvent($data);

        return response()->json($data,201);
    }

    public function update(EventRequest $request, $id)
    {
      
        $this->eventRepository->updateEvent($request->all(), $id);

        return response()->json($request,201);
    }

    public function destroy($id)
    {
        $this->eventRepository->destroyEvent($id);

        return response()->json('deleted');
    }


}
