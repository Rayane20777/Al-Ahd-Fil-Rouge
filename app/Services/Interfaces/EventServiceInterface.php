<?php

namespace App\Services\InterfaceS;


interface EventServiceInterface
{
    public function allEvent();
    public function allOldEvent();
    public function storeEvent($data);
    public function updateEvent($data, $id); 
    public function destroyEvent($id);
}
