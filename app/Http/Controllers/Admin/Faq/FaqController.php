<?php

namespace App\Http\Controllers\Admin\Faq;

use App\DataTables\Admin\Faq\FaqEntryDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Faq\FaqEntryRequest;
use App\Models\FaqEntry;
use App\Models\FaqTopic;
use App\Services\Faq\FaqService;

class FaqController extends Controller
{
    protected $faqService;

    public function __construct(FaqService $faqService)
    {
        $this->faqService = $faqService;

        $this->middleware('permission:All Fqs|Edit Faq|Create Faq|Delete Faq', ['only' => ['index']]);
        $this->middleware('permission:Create Faq', ['only' => ['create', 'store']]);
        $this->middleware('permission:Edit Faq', ['only' => ['edit', 'update']]);
        $this->middleware('permission:Delete Faq', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(FaqEntryDataTable $dataTable)
    {
        set_page_meta('All Faqs');
        return $dataTable->render('admin.faq.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        set_page_meta('Create Question');
        $topics = FaqTopic::all();
        return view('admin.faq.create', compact('topics'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(FaqEntryRequest $request)
    {

        $data = $request->validated();
        try {
            $this->faqService->storeOrUpdate($data);
            record_created_flash('Question Created Successfully.');
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
        set_page_meta('Edit Question');
        $item = $this->faqService->get($id);
        $topics = FaqTopic::all();
        return view('admin.faq.edit', compact('item', 'topics'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FaqEntryRequest $request, $id)
    {

        $data = $request->validated();
        try {
            $this->faqService->storeOrUpdate($data, $id);
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
        $item = FaqEntry::find($id);

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
