<?php

namespace App\Http\Controllers\Admin\Course;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\Admin\CourseLanguageDataTable;
use App\Models\CourseLanguage;

class CourseLanguageController extends Controller
{
    public function index(CourseLanguageDataTable $dataTable)
    {
        set_page_meta('Languages');
        return $dataTable->render('admin.course.language.index');
    }

    public function create()
    {
        set_page_meta('Course Language');
        return view('admin.course.language.create');
    }

    public function edit(string $id)
    {
        $data['lang'] = CourseLanguage::findOrFail($id);

        return view('admin.course.language.edit', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required'
        ]);

        CourseLanguage::create($request->all());

        record_created_flash();

        return back();
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required'
        ]);

        CourseLanguage::findOrFail($id)->update($request->all());

        record_updated_flash();

        return back();
    }

    public function destroy(string $id)
    {
        CourseLanguage::findOrFail($id)->delete();

        record_deleted_flash();

        return back();
    }
}
