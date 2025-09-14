<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\ContactUsDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactUsRequest;
use App\Models\ContactUs;
use App\Services\ContactUsService;

class ContactUsController extends Controller
{
    protected $contactusService;

    public function __construct(ContactUsService $contactusService)
    {
        $this->contactusService = $contactusService;

        $this->middleware('permission:All Contact Lists|Show Contact|Delete Contact', ['only' => ['index']]);
        $this->middleware('permission:Show Contact', ['only' => ['show']]);
        $this->middleware('permission:Delete Contact', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ContactUsDataTable $dataTable)
    {
        set_page_meta('All Contact');

        return $dataTable->render('admin.contact.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(ContactUsRequest $request)
    {

        $data = $request->validated();
        try {
            $this->contactusService->storeOrUpdate($data);
            record_created_flash('Data Submited Successfully.');

            return back();
        } catch (\Exception $e) {
            log_error($e);

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
        set_page_meta('Contact Details');
        try {
            $item = ContactUs::where('id', $id)->firstOrFail();
            return view('admin.contact.show', compact('item'));
        } catch (\Exception $e) {
            log_error($e);
            something_wrong_flash('An error occurred while retrieving details.');
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
            $item = ContactUs::find($id);

            if ($item) {
                $item->delete();
                record_deleted_flash();
            } else {
                something_wrong_flash();
            }

            return redirect()->back();
        } catch (\Exception $e) {
            something_wrong_flash();
            log_error($e);

            return back();
        }
    }
}
