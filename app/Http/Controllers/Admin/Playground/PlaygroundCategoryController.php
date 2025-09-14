<?php

namespace App\Http\Controllers\Admin\Playground;

use App\DataTables\Admin\PlaygroundCategoryDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PlaygroundCategoryRequest;
use App\Models\PlaygroundCategory;
use App\Services\Playground\PlaygroundCategoryService;

class PlaygroundCategoryController extends Controller
{
    protected $playCategoryService;

    public function __construct(PlaygroundCategoryService $playCategoryService)
    {
        $this->playCategoryService = $playCategoryService;

        $this->middleware('permission:All Playgrounds|Edit Playground|Create Playground|Delete Playground', ['only' => ['index']]);
        $this->middleware('permission:Create Playground', ['only' => ['create', 'store']]);
        $this->middleware('permission:Edit Playground', ['only' => ['edit', 'update']]);
        $this->middleware('permission:Delete Playground', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PlaygroundCategoryDataTable $dataTable)
    {
        set_page_meta('All Category');

        return $dataTable->render('admin.playground.category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        set_page_meta('Create Category');

        return view('admin.playground.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(PlaygroundCategoryRequest $request)
    {
        $data = $request->validated();
        try {
            $this->playCategoryService->storeOrUpdate($data);
            record_created_flash('Data Created Successfully.');

            return redirect()->route('admin.playground.category.index');
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
        set_page_meta('Edit Category');
        $item = $this->playCategoryService->get($id);

        return view('admin.playground.category.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PlaygroundCategoryRequest $request, $id)
    {
        $data = $request->validated();
        try {
            $this->playCategoryService->storeOrUpdate($data, $id);
            record_updated_flash();

            return redirect()->route('admin.setting.playground.category.index');
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
            $item = PlaygroundCategory::findOrFail($id);

            // Delete the event
            $item->delete();
            record_deleted_flash();
        } catch (\Exception $e) {
            log_error($e);
            something_wrong_flash();

            return redirect()->back();
        }

        return redirect()->back();
    }
}
