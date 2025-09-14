<?php

namespace App\Http\Controllers\Admin\PreRequisition\Wiki;

use App\DataTables\Admin\WikiTagDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\WikiTagRequest;
use App\Services\PreRequisition\WikiTagService;

class WikiTagController extends Controller
{
    protected $wikiTagService;

    public function __construct(WikiTagService $wikiTagService)
    {
        $this->wikiTagService = $wikiTagService;

        $this->middleware('permission:All Pre-Requisitions|Edit Pre-Requisition|Create Pre-Requisition|Delete Pre-Requisition', ['only' => ['index']]);
        $this->middleware('permission:Create Pre-Requisition', ['only' => ['create', 'store']]);
        $this->middleware('permission:Edit Pre-Requisition', ['only' => ['edit', 'update']]);
        $this->middleware('permission:Delete Pre-Requisition', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(WikiTagDataTable $dataTable)
    {
        set_page_meta('Wiki Tag');

        return $dataTable->render('admin.pre_requisitions.wiki_tag.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        set_page_meta('Create Wiki Tag');

        return view('admin.pre_requisitions.wiki_tag.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WikiTagRequest $request)
    {
        $data = $request->validated();

        try {
            $this->wikiTagService->storeOrUpdate($data);
            record_created_flash();
        } catch (\Exception $e) {
            log_error($e);
        }

        return back();
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
        try {
            $item = $this->wikiTagService->get($id);

            set_page_meta('Edit Wiki Tag');

            return view('admin.pre_requisitions.wiki_tag.edit', compact('item'));
        } catch (\Exception $e) {
            log_error($e);
        }

        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(WikiTagRequest $request, $id)
    {
        $data = $request->validated();

        try {
            $this->wikiTagService->storeOrUpdate($data, $id);
            record_updated_flash();

            return redirect()->route('admin.wiki-tag.index');
        } catch (\Exception $e) {
            log_error($e);

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
            $this->wikiTagService->delete($id);
            record_deleted_flash();

            return back();
        } catch (\Exception $e) {
            log_error($e);
        }
    }
}
