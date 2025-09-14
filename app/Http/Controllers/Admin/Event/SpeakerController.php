<?php

namespace App\Http\Controllers\Admin\Event;

use App\DataTables\Admin\Event\SpeakerDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Event\SpeakerRequest;
use App\Models\Event;
use App\Models\Speaker;
use App\Services\Event\SpeakerService;
use App\Services\Utils\FileService;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class SpeakerController extends Controller
{
    protected $speakerService;

    protected $fileService;

    public function __construct(SpeakerService $speakerService, FileService $fileService)
    {
        $this->speakerService = $speakerService;
        $this->fileService = $fileService;

        $this->middleware('permission:All Speakers|Edit Speaker|Create Speaker|Delete Speaker', ['only' => ['index']]);
        $this->middleware('permission:Create Speaker', ['only' => ['create', 'store']]);
        $this->middleware('permission:Edit Speaker', ['only' => ['edit', 'update']]);
        $this->middleware('permission:Delete Speaker', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(SpeakerDataTable $dataTable)
    {
        set_page_meta('All Speakers');

        return $dataTable->render('admin.event.speaker.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        set_page_meta('Create Speaker');

        return view('admin.event.speaker.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(SpeakerRequest $request)
    {

        $data = $request->validated();
        try {
            $this->speakerService->storeOrUpdate($data);
            record_created_flash('Speaker Created Successfully.');

            return back();
        } catch (\Exception $e) {
            log_error($e);
            something_wrong_flash();

            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        set_page_meta('Edit Speaker');
        $speaker = $this->speakerService->get($id);

        return view('admin.event.speaker.edit', compact('speaker'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SpeakerRequest $request, $id)
    {
        $data = $request->validated();
        try {
            $this->speakerService->storeOrUpdate($data, $id);
            record_updated_flash();

            return redirect()->back();
        } catch (\Exception $e) {
            log_error($e);
            something_wrong_flash();

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
        $speaker = Speaker::find($id);

        if ($speaker) {
            if ($speaker->avatar) {
                try {
                    $this->fileService->delete($speaker->avatar);
                } catch (\Exception $e) {
                    $this->logFlashThrow($e);
                }
            }
            // Delete the event
            $speaker->delete();
            record_deleted_flash();
        } else {
            something_wrong_flash();
        }

        return redirect()->back();
    }

    public function showSpeakerEvents($id)
    {
        set_page_meta('Speaker Events');
        try {
            $speaker = Speaker::findOrFail($id);
            $events = $speaker->events()->paginate(10);

            return view('admin.event.speaker.event', compact('speaker', 'events'));
        } catch (ModelNotFoundException $e) {
            log_error($e);
            something_wrong_flash('Speaker not found.');

            return redirect()->back();
        }
    }
}
