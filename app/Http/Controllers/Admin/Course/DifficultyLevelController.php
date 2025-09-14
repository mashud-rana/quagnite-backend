<?php

namespace App\Http\Controllers\Admin\Course;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\Admin\DifficultyLevelDataTable;
use App\Models\DifficultyLevel;

class DifficultyLevelController extends Controller
{
    public function index(DifficultyLevelDataTable $dataTable)
    {
        set_page_meta('Difficulty Levels');
        return $dataTable->render('admin.course.difficulty-level.index');
    }

    public function create()
    {
        set_page_meta('Course Difficulty Level');
        return view('admin.course.difficulty-level.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required'
        ]);

        DifficultyLevel::create($request->all());

        record_created_flash();

        return back();
    }

    public function edit(string $id)
    {
        $data['level'] = DifficultyLevel::findOrFail($id);

        return view('admin.course.difficulty-level.edit', $data);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required'
        ]);

        DifficultyLevel::findOrFail($id)->update($request->all());

        record_updated_flash();

        return back();
    }

    public function destroy(string $id)
    {
        DifficultyLevel::findOrFail($id)->delete();

        record_deleted_flash();

        return back();
    }
}
