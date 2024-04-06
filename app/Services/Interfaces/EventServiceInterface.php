<?php

namespace App\Services\InterfaceS;


interface EventServiceInterface
{
    public function allEvent();
    public function storeEvent($data);
    public function findEvent($id);
    public function updateEvent($data, $id); 
    public function destroyEvent($id);
}
