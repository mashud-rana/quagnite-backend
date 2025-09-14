<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\InvoiceDataTable;
use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;

class InvoiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:All Invoices|Delete Invoice', ['only' => ['index']]);
        $this->middleware('permission:Delete Invoice', ['only' => ['delete']]);
    }

    public function index(InvoiceDataTable $dataTable)
    {
        set_page_meta('Invoices');

        return $dataTable->render('admin.invoice.index');
    }

    public function generateInvoice($id)
    {
        $invoice = Invoice::with(['items', 'user'])->where('id', $id)->first();
        $student = User::findOrFail($invoice->user->id);

        $pdf = PDF::loadView('student.invoice.invoice', compact('invoice', 'student'));

        return $pdf->download($invoice->invoice_id.'.pdf');
    }

    public function viewInvoice($id)
    {
        $invoice = Invoice::with(['items', 'user'])->where('id', $id)->first();
        $student = User::findOrFail($invoice->user->id);

        $pdf = PDF::loadView('student.invoice.invoice', compact('invoice', 'student'));

        return $pdf->stream($invoice->invoice_id.'.pdf');
    }

    public function delete($id)
    {
        try {
            $invoice = Invoice::findOrFail($id);

            // Delete associated items
            $invoice->items()->delete();

            // Delete the invoice record
            $invoice->delete();

            record_deleted_flash();
        } catch (\Exception $e) {
            log_error($e);
            something_wrong_flash();
        }

        return redirect()->back();
    }
}
