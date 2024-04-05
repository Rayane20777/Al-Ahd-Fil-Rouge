<?php


namespace App\Repositories;

use App\Repositories\Interfaces\ParamedicalServiceRepositoryInterface;
use App\Models\ParamedicalService;

class ParamedicalServiceRepository implements ParamedicalServiceRepositoryInterface
{

    

    public function allParamedicalService()
    {
        return ParamedicalService::all();
    }

    public function storeParamedicalService($data)
    {
        return ParamedicalService::create($data);
    }

    public function findParamedicalService($id)
    {
        return ParamedicalService::find($id);
    }

    public function updateParamedicalService($data, $id)
    {
        $paramedicalService = ParamedicalService::where('id', $id)->first();
        $paramedicalService->name = $data['name'];
        $paramedicalService->description = $data['description'];
        $paramedicalService->save();
    }

    public function destroyParamedicalService($id)
    {
        $paramedicalService = ParamedicalService::find($id);
        $paramedicalService->delete();
    }
}