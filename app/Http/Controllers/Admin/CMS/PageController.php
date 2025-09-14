<?php

namespace App\Http\Controllers\Admin\CMS;

use App\DataTables\Admin\CMS\PagesDataTable;
use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

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
        logger('file response',$request->all());
    }
}
