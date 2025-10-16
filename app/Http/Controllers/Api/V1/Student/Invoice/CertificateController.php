<?php

namespace App\Http\Controllers\Api\V1\Student\Invoice;


use App\Models\Ebook;
use App\Models\Invoice;
use App\Models\ExamResult;
use App\Traits\ApiResponse;
use App\Models\EnrollCourse;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Traits\PaginatedResourceTrait;
use App\Services\Api\V1\Student\EbookService;
use App\Services\Api\V1\Student\InvoiceService;
use App\Services\Api\V1\Student\CertificateService;
use App\Http\Resources\Api\V1\Student\Ebook\EbookResource;
use App\Http\Resources\Api\V1\Student\Invoice\InvoiceResource;
use App\Http\Resources\Api\V1\Student\Invoice\StudentCertificateResource;

class CertificateController extends Controller
{
    use ApiResponse, PaginatedResourceTrait;
    protected $certificateService;


    public function __construct(CertificateService $certificateService)
    {
        $this->certificateService = $certificateService;

    }

    public function myCertificates(Request $request)
    {

        $certificates = $this->certificateService->getMyStudentCertificates(
            withRelations: [
                'certifiable' => function ($morphTo) {
                    $morphTo->morphWith([
                        EnrollCourse::class => ['course'],
                        ExamResult::class   => ['exam'],
                    ]);
                }
            ]
        );
        // withRelations: ['certifiable.course','certifiable.exam']
        // return $certificates;
        try {
            if (!$certificates) {
                return $this->error('No certificates found', 404);
            }

            $resource =  $this->paginatedResponse($certificates, StudentCertificateResource::class);
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
        return response($pdf->output(), 200)
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'attachment; filename="' . $fileName . '"')
            ->header('Access-Control-Expose-Headers', 'Content-Disposition');

        } catch (\Exception $e) {
            logger()->error('Invoice download error: ' . $e->getMessage());
            return response()->json(['error' => 'Something went wrong'], 500);
        }
    }
    public function viewInvoice($id)
    {
        try {
            $invoice = Invoice::with('items')->findOrFail($id);
            $student = auth()->user();

            $pdf = PDF::loadView('student.invoice.invoice', compact('invoice', 'student'));
            $fileName = $invoice->invoice_id . '.pdf';

            return response($pdf->output(), 200)
                ->header('Content-Type', 'application/pdf')
                ->header('Content-Disposition', 'inline; filename="' . $fileName . '"')
                ->header('Access-Control-Expose-Headers', 'Content-Disposition');
        } catch (\Exception $e) {
            logger()->error('Invoice view error: ' . $e->getMessage());
            return response()->json(['error' => 'Something went wrong'], 500);
        }
    }








}
