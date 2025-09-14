<?php

namespace App\Http\Controllers\Admin;

use App\Models\DemoBook;
use App\Http\Controllers\Controller;
use App\DataTables\Admin\DemoBookDataTable;

class DemoBookController extends Controller
{
    public function index(DemoBookDataTable $dataTable)
    {
        set_page_meta('Demo Books');

        return $dataTable->render('admin.demobook.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        set_page_meta('Booking Details');
        try {
            $item = DemoBook::where('id', $id)->firstOrFail();

            return view('admin.demobook.show', compact('item'));
        } catch (\Exception $e) {
            log_error($e);
            something_wrong_flash('An error occurred while retrieving details.');

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
            $data = DemoBook::findOrFail($id);

            $data->delete();

            record_deleted_flash();

            return redirect()->back();
        } catch (\Exception $e) {
            log_error($e);
            something_wrong_flash();

            return redirect()->back();
        }
    }
}
