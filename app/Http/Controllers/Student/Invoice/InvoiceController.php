<?php

namespace App\Http\Controllers\Student\Invoice;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class InvoiceController extends Controller
{
    public function index()
    {
        set_page_meta('Invoice');

        $data['invoices'] = Invoice::with(['items'])
            ->where('user_id', auth()->user()->id)
            ->paginate(10);

        return view('student.invoice.index', $data);
    }

    public function generateInvoice($id)
    {
        $invoice = Invoice::with('items')->where('id', $id)->first();
        $student = Auth::user();

        $pdf = PDF::loadView('student.invoice.invoice', compact('invoice', 'student'));

        return $pdf->download($invoice->invoice_id.'.pdf');
    }

    public function viewInvoice($id)
    {
        $invoice = Invoice::with('items')->where('id', $id)->first();
        $student = Auth::user();

        $pdf = PDF::loadView('student.invoice.invoice', compact('invoice', 'student'));

        return $pdf->stream($invoice->invoice_id.'.pdf');
    }
}
