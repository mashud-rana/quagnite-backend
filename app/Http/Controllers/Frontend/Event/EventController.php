<?php

namespace App\Http\Controllers\Frontend\Event;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Event\AttendeeRequest;
use App\Models\Event;
use App\Services\Event\AttendeeService;

class EventController extends Controller
{
    protected $attendeeService;

    public function __construct(AttendeeService $attendeeService)
    {
        $this->attendeeService = $attendeeService;
    }

    public function index()
    {
        set_page_meta('Events');
        $upcoming_events = Event::where('status', PENDING)->get();
        $latest_events = Event::whereDate('event_end', '<', now())->take(3)->get();

        return view('frontend.event.index', compact('upcoming_events', 'latest_events'));
    }

    public function eventDetails($slug)
    {
        set_page_meta('Event Details');
        $event = Event::where('slug', $slug)->get()->first();
        $latest_events = Event::whereDate('event_end', '<', now())->take(3)->get();

        return view('frontend.event.details', compact('event', 'latest_events'));
    }

    public function storeAttendee(AttendeeRequest $request)
    {
        $data = $request->validated();
        try {
            $obj = $this->attendeeService->storeOrUpdate($data);
            $eventId = $request->input('event_id');
            $obj->events()->attach($eventId);
            record_created_flash('Registration Successful.');

            return back();
        } catch (\Exception $e) {
            log_error($e);
            something_wrong_flash();

            return back();
        }
    }
}
