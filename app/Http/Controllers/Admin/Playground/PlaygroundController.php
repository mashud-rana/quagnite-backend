<?php

namespace App\Http\Controllers\Admin\Playground;

use App\Models\PlaygroundCategory;
use App\Http\Controllers\Controller;
use App\DataTables\Admin\PlaygroundDataTable;
use App\Http\Requests\Admin\PlaygroundRequest;
use App\Services\Playground\PlaygroundManageService;

class PlaygroundController extends Controller
{
    protected $playgroundManageService;

    public function __construct(PlaygroundManageService $playgroundManageService)
    {
        $this->playgroundManageService = $playgroundManageService;

        $this->middleware('permission:All Playgrounds|Edit Playground', ['only' => ['index']]);
        $this->middleware('permission:Edit Playground', ['only' => ['edit', 'update']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PlaygroundDataTable $dataTable)
    {
        set_page_meta('All Playground');

        return $dataTable->render('admin.playground.index');
    }

    public function edit($id)
    {
        set_page_meta('Edit Playground');
        $categories = PlaygroundCategory::all();
        $item = $this->playgroundManageService->get($id);

        return view('admin.playground.edit', compact('item', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PlaygroundRequest $request, $id)
    {
        $data = $request->validated();
        try {
            $this->playgroundManageService->storeOrUpdate($data, $id);
            record_updated_flash();

            return redirect()->back();
        } catch (\Exception $e) {
            log_error($e);
            something_wrong_flash();

            return back();
        }
    }
}
