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
            return view('member_paramedical_services.index', ['memberParamedicalServices' => $memberParamedicalServices]);
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function store(MemberParamedicalServiceRequest $request)
    {
        $data = $request->validated();

        try {
            $this->service->storeMemberParamedicalServices($data);
            return redirect()->route('member_paramedical_services.index')->with('success', 'Member paramedical services created successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
