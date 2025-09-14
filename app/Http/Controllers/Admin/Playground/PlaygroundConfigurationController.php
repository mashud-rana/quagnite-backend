<?php

namespace App\Http\Controllers\Admin\Playground;

use App\DataTables\Admin\PlaygroundConfigurationDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PlaygroundConfigurationRequest;
use App\Models\Playground;
use App\Services\Playground\PlaygroundConfigurationService;

class PlaygroundConfigurationController extends Controller
{
    protected $playgroundConfService;

    public function __construct(
        PlaygroundConfigurationService $playgroundConfService
    ) {
        $this->playgroundConfService = $playgroundConfService;

        $this->middleware('permission:All Playgrounds|Edit Playground', ['only' => ['index']]);
        $this->middleware('permission:Edit Playground', ['only' => ['edit', 'update']]);
    }

    public function index(PlaygroundConfigurationDataTable $dataTable)
    {
        set_page_meta('All Playground Configuration');

        return $dataTable->render('admin.playground.configuration.index');
    }

    public function edit($id)
    {
        set_page_meta('Edit Configuration');
        $playgrounds = Playground::all();
        $item = $this->playgroundConfService->get($id);

        return view('admin.playground.configuration.edit', compact(
            'item',
            'playgrounds'
        ));
    }

    public function update(PlaygroundConfigurationRequest $request, $id)
    {
        $data = $request->validated();
        try {
            $this->playgroundConfService->storeOrUpdate($data, $id);
            record_updated_flash();

            return redirect()->route('admin.playground.configuration.index');
        } catch (\Exception $e) {
            log_error($e);
            something_wrong_flash();

            return back();
        }
    }
}
