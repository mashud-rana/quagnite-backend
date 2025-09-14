<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\AnnouncementDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AnnouncementRequest;
use App\Models\Announcement;
use App\Services\Admin\AnnouncementService;

class AnnouncementController extends Controller
{
    protected $announcementService;

    public function __construct(AnnouncementService $announcementService)
    {
        $this->announcementService = $announcementService;

        $this->middleware('permission:All Announcements|Edit Announcement|Create Announcement|Delete Announcement', ['only' => ['index']]);
        $this->middleware('permission:Create Announcement', ['only' => ['create', 'store']]);
        $this->middleware('permission:Edit Announcement', ['only' => ['edit', 'update']]);
        $this->middleware('permission:Delete Announcement', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AnnouncementDataTable $dataTable)
    {
        set_page_meta('All Announcements');

        return $dataTable->render('admin.announcement.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        set_page_meta('Create Announcement');

        return view('admin.announcement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(AnnouncementRequest $request)
    {

        $data = $request->validated();
        try {
            $this->announcementService->storeOrUpdate($data);
            record_created_flash('Announcement Created Successfully.');

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
        set_page_meta('Edit Anouncement');
        $item = $this->announcementService->get($id);

        return view('admin.announcement.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AnnouncementRequest $request, $id)
    {

        $data = $request->validated();
        try {
            $this->announcementService->storeOrUpdate($data, $id);
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
        $item = Announcement::find($id);

        if ($item) {
            // Delete the item
            $item->delete();
            record_deleted_flash();
        } else {
            something_wrong_flash();
        }

        return redirect()->back();
    }
}
