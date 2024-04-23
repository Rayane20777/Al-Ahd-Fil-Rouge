<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\MemberParamedicalServiceRequest;
use App\Services\Interfaces\MemberParamedicalServiceServiceInterface;
use Exception;

class MemberParamedicalServiceController extends Controller
{
    private $service;

    public function __construct(MemberParamedicalServiceServiceInterface $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        try {
            $memberParamedicalServices = $this->service->allMemberParamedicalService();
            return view('/secretary/users', ['memberParamedicalServices' => $memberParamedicalServices]);
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function store(MemberParamedicalServiceRequest $request)
    {
        $data = $request->validated();

        try {
            $this->service->storeMemberParamedicalServices($data);
            return redirect()->back()->with('success', 'Member paramedical services assigned successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
