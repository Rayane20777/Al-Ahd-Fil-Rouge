<?php

namespace App\Services\InterfaceS;


interface SessionServiceInterface
{
    public function allSession();
    public function allDoctor();
    public function allParamedicalService();
    public function memberSession();
    public function storeSession($data);
    public function findSession($id);
    public function updateSession($data, $id); 
    public function destroySession($id);
    public function makeSession($id);
    public function approveSession($id);
    public function denySession($id);
}
