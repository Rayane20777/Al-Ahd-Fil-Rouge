<?php


namespace App\Repositories;

use App\Repositories\Interfaces\DoctorRepositoryInterface;
use App\Models\Doctor;
use App\Models\Profession;

class DoctorRepository implements DoctorRepositoryInterface
{

    

    public function allDoctor()
    {
        return Doctor::with('profession')->get();    
    }

    public function allProfession()
    {
        return Profession::all();    
    }

    public function storeDoctor($data)
    {
        return Doctor::create($data);
    }

    public function findDoctor($id)
    {
        return Doctor::find($id);
    }

    public function updateDoctor($data, $id)
    {
        $doctor = Doctor::where('id', $id)->first();
        $doctor->fisrt_name = $data['fisrt_name'];
        $doctor->last_name = $data['last_name'];
        $doctor->address = $data['address'];
        $doctor->profession_id = $data['profession_id'];
        $doctor->save();
    }

    public function destroyDoctor($id)
    {
        $doctor = Doctor::find($id);
        $doctor->delete();
    }
}