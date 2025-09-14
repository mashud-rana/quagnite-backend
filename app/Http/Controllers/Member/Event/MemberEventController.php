<?php

namespace App\Http\Controllers\Member\Event;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Event\EventRequest;
use App\Services\Event\EventService;

class MemberEventController extends Controller
{
    protected $eventService;

    protected $fileService;

    public function __construct(EventService $eventService)
    {
        $this->eventService = $eventService;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        set_page_meta('Create Event');

        return view('member.event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(EventRequest $request)
    {

        $data = $request->validated();
        $data['user_id'] = auth()->user()->id;
        $data['status'] = PENDING;
        try {
            $this->eventService->storeOrUpdate($data);
            record_created_flash('Event Created Successfully.');

            return back();
        } catch (\Exception $e) {
            return back();
        }
    }
}
