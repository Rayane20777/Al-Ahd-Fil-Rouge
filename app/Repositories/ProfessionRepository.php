<?php


namespace App\Repositories;

use App\Repositories\Interfaces\ProfessionRepositoryInterface;
use App\Models\Profession;

class ProfessionRepository implements ProfessionRepositoryInterface
{

    

    public function allProfession()
    {
        return Profession::all();
    }

    public function storeProfession($data)
    {
        return Profession::create($data);
    }

    public function findProfession($id)
    {
        return Profession::find($id);
    }

    public function updateProfession($data, $id)
    {
        $profession = Profession::where('id', $id)->first();
        $profession->name = $data['name'];
        $profession->save();
    }

    public function destroyProfession($id)
    {
        $profession = Profession::find($id);
        $profession->delete();
    }
}