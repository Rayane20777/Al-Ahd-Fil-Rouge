<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\Interfaces\ParamedicalServiceServiceInterface;
use Illuminate\Http\Request;
use App\Http\Requests\ParamedicalServiceRequest;
use Exception;

class ParamedicalServiceController extends Controller
{
    private $service;

    public function __construct(ParamedicalServiceServiceInterface $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        try {
            $paramedicalServices = $this->service->allParamedicalService();

            return view('/admin/paramedical_services', ['paramedicalServices' => $paramedicalServices]);
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function store(ParamedicalServiceRequest $request)
    {
        $data = $request->validated();

        try {
            $this->service->storeParamedicalService($data);
            return redirect()->route('paramedical_services.index')->with('success', 'Paramedical service created successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function update(ParamedicalServiceRequest $request, $id)
    {
        try {
            $this->service->updateParamedicalService($request->all(), $id);
            return redirect()->route('paramedical_services.index')->with('success', 'Paramedical service updated successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        try {
            $this->service->destroyParamedicalService($id);
            return redirect()->route('paramedical_services.index')->with('success', 'Paramedical service deleted successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
