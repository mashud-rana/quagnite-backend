<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\PaymentDataTable;
use App\Http\Controllers\Controller;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:All Payments|Delete Payment', ['only' => ['index']]);
        $this->middleware('permission:Delete Payment', ['only' => ['delete']]);
    }

    public function index(PaymentDataTable $dataTable)
    {
        set_page_meta('Payments');

        return $dataTable->render('admin.payment.index');
    }

    public function delete($id)
    {
        try {
            Payment::findOrFail($id)->delete($id); // delete record

            record_deleted_flash();

            return redirect()->back();
        } catch (\Exception $e) {
            log_error($e);
            something_wrong_flash();
        }
    }
}
