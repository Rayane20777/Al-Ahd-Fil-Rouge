<?php
namespace App\Repositories\Interfaces;

Interface ParamedicalServiceRepositoryInterface{
    
    public function allParamedicalService();
    public function storeParamedicalService($data);
    public function findParamedicalService($id);
    public function updateParamedicalService($data, $id); 
    public function destroyParamedicalService($id);
}