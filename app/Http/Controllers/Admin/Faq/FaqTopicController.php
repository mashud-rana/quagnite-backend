<?php

namespace App\Http\Controllers\Admin\Faq;

use App\DataTables\Admin\Faq\FaqTopicDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Faq\FaqTopicRequest;
use App\Models\FaqTopic;
use App\Services\Faq\FaqTopicService;

class FaqTopicController extends Controller
{
    protected $faqTopicService;

    public function __construct(FaqTopicService $faqTopicService)
    {
        $this->faqTopicService = $faqTopicService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(FaqTopicDataTable $dataTable)
    {
        set_page_meta('All Category');
        return $dataTable->render('admin.faq.topic.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        set_page_meta('Create Topic');
        return view('admin.faq.topic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(FaqTopicRequest $request)
    {

        $data = $request->validated();
        try {
            $this->faqTopicService->storeOrUpdate($data);
            record_created_flash('Topic Created Successfully.');
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
        set_page_meta('Edit Topic');
        $item = $this->faqTopicService->get($id);
        return view('admin.faq.topic.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FaqTopicRequest $request, $id)
    {

        $data = $request->validated();
        try {
            $this->faqTopicService->storeOrUpdate($data, $id);
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
        $item = FaqTopic::find($id);

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
