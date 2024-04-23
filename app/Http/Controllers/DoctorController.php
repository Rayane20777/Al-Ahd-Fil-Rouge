<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DoctorRequest;
use App\Services\Interfaces\DoctorServiceInterface;
use Exception;

class DoctorController extends Controller
{
    private $service;

    public function __construct(DoctorServiceInterface $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        try {
            $doctors = $this->service->allDoctor();
            
            return view('/admin/doctors', ['doctors' => $doctors]);
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function store(DoctorRequest $request)
    {
        $data = $request->validated();

        try {
            $this->service->storeDoctor($data);
            return redirect()->route('doctors.index')->with('success', 'Doctor added successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    public function update(DoctorRequest $request, $id)
    {
        try {
            $this->service->updateDoctor($request->all(), $id);
            return redirect()->route('doctors.index')->with('success', 'Doctor updated successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    
    public function destroy($id)
    {
        try {
            $this->service->destroyDoctor($id);
            return redirect()->route('doctors.index')->with('success', 'Doctor deleted successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

}
