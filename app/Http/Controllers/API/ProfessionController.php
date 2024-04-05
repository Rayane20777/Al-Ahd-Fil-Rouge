<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\ProfessionRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Requests\ProfessionRequest;

class ProfessionController extends Controller
{
    private $professionRepository;

    public function __construct(ProfessionRepositoryInterface $professionRepository){
        $this->professionRepository = $professionRepository;

    }
    /*
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index()
    {
        $professions = $this->professionRepository->allProfession();
        return response()->json($professions,201);

    }

    public function store(ProfessionRequest $request)
    {
        $data = $request->validate([
        ]);

        $this->professionRepository->storeProfession($data);

        return response()->json($data,201);
    }

    public function update(ProfessionRequest $request, $id)
    {
      
        $this->professionRepository->updateProfession($request->all(), $id);

        return response()->json($request,201);
    }

    public function destroy($id)
    {
        $this->professionRepository->destroyProfession($id);

        return response()->json('deleted');
    }

}
