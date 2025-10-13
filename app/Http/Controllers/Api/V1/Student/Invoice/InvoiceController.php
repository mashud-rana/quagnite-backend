<?php

namespace App\Http\Controllers\Api\V1\Student\Invoice;


use App\Models\Ebook;
use App\Models\Invoice;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Traits\PaginatedResourceTrait;
use App\Services\Api\V1\Student\EbookService;
use App\Services\Api\V1\Student\InvoiceService;
use App\Http\Resources\Api\V1\Student\Ebook\EbookResource;
use App\Http\Resources\Api\V1\Student\Invoice\InvoiceResource;
use Barryvdh\DomPDF\Facade\Pdf;

class InvoiceController extends Controller
{
    use ApiResponse, PaginatedResourceTrait;
    protected $invoiceService;


    public function __construct(InvoiceService $invoiceService)
    {
        $this->invoiceService = $invoiceService;

    }

    public function myInvoices(Request $request)
    {

         $invoices = $this->invoiceService->getMyInvoices(withRelations: ['items.itemable']);
        // return $invoices;
        try {
            if (!$invoices) {
                return $this->error('No invoices found', 404);
            }

            $resource =  $this->paginatedResponse($invoices, InvoiceResource::class);
            return $this->success($resource);
        } catch (\Exception $e) {
            logger($e->getMessage());
            return $this->error($e->getMessage());
        }
    }


public function download($id)
{
    try {
        $invoice = Invoice::with('items')->findOrFail($id);
        $student = auth()->user();

        // Generate the PDF
        $pdf = Pdf::loadView('student.invoice.invoice', compact('invoice', 'student'));
        $fileName = $invoice->invoice_id . '.pdf';

        // Return proper response for browser download
        return response($pdf->output(), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="' . $fileName . '"',
        ]);
    } catch (\Exception $e) {
        logger()->error('Invoice download error: ' . $e->getMessage());
        return response()->json(['error' => 'Something went wrong'], 500);
    }
}






}
