<?php

namespace App\Services;

use App\Http\Requests\Event\EventDeleteRequest;
use App\Http\Requests\Event\EventStoreRequest;
use App\Models\Event;

class EventService
{
    public function __construct()
    {
    }

    public function getEventsArray(): array
    {
        $arrEvents = [];

        $events = Event::whereStatus('1')->get();

        foreach ($events as $event) {

            $arrEvents[] = [
                'id' => $event->id,
                'title' => $event->title,
                'start' => $event->event_start,
                'end' => $event->event_end,
            ];
        }

        return $arrEvents;
    }

    public function store(EventStoreRequest $request)
    {
        $data = $request->validated();

        if (auth()->user()->user_type === USER_TYPE_ADMIN) {
            $data['status'] = 1;
        }

        $event = Event::create($data);

        return $event;
    }

    public function delete(EventDeleteRequest $request)
    {
        $event = Event::find($request->event_id);

        if (!$event) {
            return false;
        }

        return $event->delete() ? true : false;
    }
}
