<?php

namespace App\Http\Controllers\Admin\CMS;

use App\DataTables\Admin\CMS\PagesDataTable;
use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\PageContent;
use App\Services\Utils\FileService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function index(PagesDataTable $dataTable)
    {
        set_page_meta('Pages');

        return $dataTable->render('admin.cms.page.index');
    }

    public function edit($id)
    {
        set_page_meta('Edit Page');

        $page = Page::with(['pageContents'])->findOrFail($id);

        return view('admin.cms.page.edit', compact('page'));
    }

    public function cmsUpdateFile(Request $request)
    {
        $data = $request->validate([
            'image' => 'required|file|max:2048', // max 2MB
        ]);

        $fileService = app(FileService::class);

        $filePath = $fileService->upload($data['image'], PageContent::CMS_FILE_PATH);

        return response()->json([
            'file_path' => $filePath,
            'file_url' => Storage::disk(config('settings.storage_driver'))->url($filePath),
        ]);
    }
}
