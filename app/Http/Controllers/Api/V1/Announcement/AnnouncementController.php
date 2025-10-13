<?php

namespace App\Http\Controllers\Api\V1\Announcement;


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

class AnnouncementController extends Controller
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


}
