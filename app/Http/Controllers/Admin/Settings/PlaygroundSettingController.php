<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use App\Models\Playground;

class PlaygroundSettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:All Playgrounds|Edit Playground', ['only' => ['index']]);
        $this->middleware('permission:Edit Playground', ['only' => ['activeOrDeactive']]);
    }

    public function index()
    {
        set_page_meta('Playground Settings');

        $playgrounds = Playground::select('id', 'title', 'status', 'lab_url')->get();

        return view('admin.settings.playgrounds', [
            'playgrounds' => $playgrounds,
        ]);
    }

    public function activeOrDeactive(string $id)
    {
        $playground = Playground::findOrFail($id);

        $playground->update([
            'status' => $playground->status == ACTIVE ? INACTIVE : ACTIVE,
        ]);

        record_updated_flash();

        return back();
    }
}
