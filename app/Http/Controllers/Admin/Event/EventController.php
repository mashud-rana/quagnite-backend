<?php

namespace App\Http\Controllers\Admin\Event;

use App\DataTables\Admin\Event\EventDataTable;
use App\DataTables\Admin\Event\MemberEventDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Event\EventRequest;
use App\Models\Speaker;
use App\Services\Event\EventService;
use App\Services\Utils\FileService;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class EventController extends Controller
{
    protected $eventService;

    protected $fileService;

    public function __construct(EventService $eventService, FileService $fileService)
    {
        $this->eventService = $eventService;
        $this->fileService = $fileService;

        $this->middleware('permission:All Events|Edit Event|Create Event|Delete Event', ['only' => ['index']]);
        $this->middleware('permission:Create Event', ['only' => ['create', 'store']]);
        $this->middleware('permission:Edit Event', ['only' => ['edit', 'update']]);
        $this->middleware('permission:Delete Event', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(EventDataTable $dataTable)
    {
        set_page_meta('All Events');

        return $dataTable->render('admin.event.index');
    }

    public function memberEvent(MemberEventDataTable $dataTable)
    {
        set_page_meta('All Pending Events');

        return $dataTable->render('admin.event.pending');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        set_page_meta('Create Event');
        $speakers = Speaker::where('status', ACTIVE)->get();
        return view('admin.event.create', compact('speakers'));
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

        try {
            $this->eventService->storeOrUpdate($data);

            record_created_flash('Event Created Successfully.');

            return back();
        } catch (\Exception $e) {
            log_error($e);
            something_wrong_flash();

            return back();
        }
    }

    public function edit($id)
    {
        try {
            set_page_meta('Edit Event');
            $event = $this->eventService->get($id);
            $speakers = Speaker::where('status', ACTIVE)->get();
            $selectedSpeakersIds = $event->speakers->pluck('id')->toArray();

            return view('admin.event.edit', compact('event', 'speakers', 'selectedSpeakersIds'));
        } catch (ModelNotFoundException $e) {
            log_error($e);
            something_wrong_flash('Event not found.');

            return redirect()->back();
        } catch (\Exception $e) {
            log_error($e);
            something_wrong_flash('An error occurred while editing the event.');

            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EventRequest $request, $id)
    {

        $data = $request->validated();
        try {
            $this->eventService->storeOrUpdate($data, $id);
            record_updated_flash();

            return redirect()->back();
        } catch (\Exception $e) {
            log_error($e);
            something_wrong_flash('An error occurred while updating the event.');

            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $this->eventService->deleteEvent($id);

            record_deleted_flash();

            return redirect()->back();
        } catch (\Exception $e) {
            log_error($e);
            something_wrong_flash('An error occurred while deleting the event.');

            return redirect()->back();
        }
    }
}
