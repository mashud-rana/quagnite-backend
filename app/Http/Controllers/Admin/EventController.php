<?php

namespace App\Http\Controllers\Admin;

use App\Services\EventService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Event\EventStoreRequest;
use App\Http\Requests\Event\EventDeleteRequest;

class EventController extends Controller
{
    public function __construct(private EventService $eventService)
    {
    }

    public function index()
    {
        $data['events'] = $this->eventService->getEventsArray();

        set_page_meta('Event');
        return view('admin.event.index', $data);
    }

    public function create()
    {


        set_page_meta('Create Event');
        return view('admin.event.create');
    }

    public function store(EventStoreRequest $request)
    {
        $this->eventService->store($request);

        record_created_flash();

        return redirect()->route('admin.event.index');
    }

    public function delete(EventDeleteRequest $request)
    {
        $response = $this->eventService->delete($request);

        if ($response) {

            return response()->json(['success' => 'event deleted'], 200);
        }

        return response()->json(['error' => 'Something goes wrong'], 404);
    }
}
