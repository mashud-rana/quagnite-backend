<?php

namespace App\Http\Controllers\Admin\Event;

use App\DataTables\Admin\Event\AttendeeDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Event\AttendeeRequest;
use App\Models\Attendee;
use App\Services\Event\AttendeeService;
use Illuminate\Http\Request;

class AttendeeController extends Controller
{
    protected $attendeeService;

    public function __construct(AttendeeService $attendeeService)
    {
        $this->attendeeService = $attendeeService;

        $this->middleware('permission:All Attendees|Edit Attendee|Delete Attendee', ['only' => ['index']]);
        $this->middleware('permission:Edit Attendee', ['only' => ['edit', 'update']]);
        $this->middleware('permission:Delete Attendee', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AttendeeDataTable $dataTable)
    {
        set_page_meta('All Attendees');

        return $dataTable->render('admin.event.attendee.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        set_page_meta('Edit Attendee');
        $item = $this->attendeeService->get($id);

        return view('admin.event.attendee.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AttendeeRequest $request, $id)
    {
        $data = $request->validated();
        try {
            $this->attendeeService->storeOrUpdate($data, $id);
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
        try {
            $attendee = Attendee::findOrFail($id);
            // Delete the attendee
            $attendee->delete();
            record_deleted_flash();
        } catch (\Exception $e) {
            log_error($e);
            something_wrong_flash();
        }

        return redirect()->back();
    }
}
