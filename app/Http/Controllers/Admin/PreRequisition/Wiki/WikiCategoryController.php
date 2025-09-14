<?php

namespace App\Http\Controllers\Admin\PreRequisition\Wiki;

use App\DataTables\Admin\WikiCategoryDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\WikiCategoryRequest;
use App\Services\PreRequisition\WikiCategoryService;
use Illuminate\Http\Request;

class WikiCategoryController extends Controller
{
    protected $wikiCategoryService;

    public function __construct(WikiCategoryService $wikiCategoryService)
    {
        $this->wikiCategoryService = $wikiCategoryService;

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
    public function index(WikiCategoryDataTable $dataTable)
    {
        set_page_meta('Wiki Category');
        return $dataTable->render('admin.pre_requisitions.wiki_category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        set_page_meta('Create Wiki Category');
        return view('admin.pre_requisitions.wiki_category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(WikiCategoryRequest $request)
    {
        $data = $request->validated();

        try {
            $this->wikiCategoryService->storeOrUpdate($data);
            record_created_flash();
        } catch (\Exception $e) {
            log_error($e);
        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $item = $this->wikiCategoryService->get($id);

            set_page_meta('Edit Wiki Category');
            return view('admin.pre_requisitions.wiki_category.edit', compact('item'));
        } catch (\Exception $e) {
            log_error($e);
        }
        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(WikiCategoryRequest $request, $id)
    {
        $data = $request->validated();

        try {
            $this->wikiCategoryService->storeOrUpdate($data, $id);
            record_updated_flash();
            return redirect()->route('admin.wiki-categories.index');
        } catch (\Exception $e) {
            log_error($e);
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $this->wikiCategoryService->delete($id);
            record_deleted_flash();
            return back();
        } catch (\Exception $e) {
            log_error($e);
        }
    }
}
