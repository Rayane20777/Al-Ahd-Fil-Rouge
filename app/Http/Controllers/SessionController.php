<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\Interfaces\SessionServiceInterface;
use App\Http\Requests\SessionRequest;
use Illuminate\Http\Request;
use Exception;

class SessionController extends Controller
{
    private $service;

    public function __construct(SessionServiceInterface $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        try {
            $sessions = $this->service->allSession();
            $doctors = $this->service->allDoctor();
            $paramedicalServices = $this->service->allParamedicalService();

            dd($sessions);
            return view('/secretary/sessions', ['sessions','doctors','paramedicalServices' => $sessions,$doctors,$paramedicalServices]);
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function store(SessionRequest $request)
    {
        $data = $request->validated();

        try {
            $this->service->storeSession($data);
            return redirect()->route('sessions.index')->with('success', 'Session created successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function update(SessionRequest $request, $id)
    {
        try {
            $this->service->updateSession($request->all(), $id);
            return redirect()->route('sessions.index')->with('success', 'Session updated successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        try {
            $this->service->destroySession($id);
            return redirect()->route('sessions.index')->with('success', 'Session deleted successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function makeSession(Request $request, $id)
    {
        try {
            $this->service->makeSession($id);
            return redirect()->route('sessions.index')->with('success', 'Session reserved successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
