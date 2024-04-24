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

    public function __construct(EventServiceInterface $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        try {
            $events = $this->service->allEvent();
            return view('/admin/events', ['events' => $events]);
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function store(EventRequest $request)
    {
        $data = $request->validated();

        try {
            $this->service->storeEvent($data);
            return redirect()->route('events.index')->with('success', 'Event created successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function update(EventRequest $request, $id)
    {
        try {
            $this->service->updateEvent($request->all(), $id);
            return redirect()->route('events.index')->with('success', 'Event updated successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        try {
            $this->service->destroyEvent($id);
            return redirect()->route('events.index')->with('success', 'Event deleted successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
