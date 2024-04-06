<?php

namespace App\Services\InterfaceS;


interface ParamedicalServiceServiceInterface
{
    public function allParamedicalService();
    public function storeParamedicalService($data);
    public function findParamedicalService($id);
    public function updateParamedicalService($data, $id); 
    public function destroyParamedicalService($id);
}
