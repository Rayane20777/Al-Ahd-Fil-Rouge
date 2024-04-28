<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\Interfaces\SessionServiceInterface;
use App\Http\Requests\SessionRequest;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\View; 

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
            // return view('/secretary/sessions', array_merge(compact('doctors'), compact('sessions'), compact('paramedicalServices')));
            return view('/secretary/sessions', compact('doctors','sessions','paramedicalServices'));
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function memberIndex()
    {
        try {
            $sessions = $this->service->memberSession();
            // return view('/secretary/sessions', array_merge(compact('doctors'), compact('sessions'), compact('paramedicalServices')));
            return view('/member/sessions', compact('sessions'));
        } catch (Exception $e) {
            return View::make('error')->with('message', $e->getMessage());
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
            return redirect()->route('member_sessions.index')->with('success', 'Session reserved successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function approveSession(Request $request , $id){
        try {
            $this->service->approveSession($id);
            return redirect()->route('secretary_session_reservations.index')->with('success', 'Session reserved successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function denySession(Request $request , $id){
        try {
            $this->service->denySession($id);
            return redirect()->route('secretary_session_reservations.index')->with('success', 'Session reserved successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
}
}