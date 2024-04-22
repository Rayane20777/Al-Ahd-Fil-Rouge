<?php


namespace App\Repositories;

use App\Repositories\Interfaces\EventRepositoryInterface;
use App\Models\Event;

class EventRepository implements EventRepositoryInterface
{

    

    public function allEvent()
    {
        return Event::all();
    }

    public function storeEvent($data)
    {
        return Event::create($data);
    }



    public function updateEvent($data, $id)
    {
        $event = Event::where('id', $id)->first();
        $event->name = $data['name'];
        $event->description = $data['description'];
        $event->date = $data['date'];
        $event->save();
    }

    public function destroyEvent($id)
    {
        $event = Event::find($id);
        $event->delete();
    }
}