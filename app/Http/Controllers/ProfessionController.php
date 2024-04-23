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

    public function __construct(ProfessionServiceInterface $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        try {
            $professions = $this->service->allProfession();
            dd($professions);
            return view('/admin/professions', ['professions' => $professions]);
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function store(ProfessionRequest $request)
    {
        $data = $request->validated();

        try {
            $this->service->storeProfession($data);
            return redirect()->route('professions.index')->with('success', 'Profession created successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function update(ProfessionRequest $request, $id)
    {
        try {
            $this->service->updateProfession($request->all(), $id);
            return redirect()->route('professions.index')->with('success', 'Profession updated successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        try {
            $this->service->destroyProfession($id);
            return redirect()->route('professions.index')->with('success', 'Profession deleted successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
