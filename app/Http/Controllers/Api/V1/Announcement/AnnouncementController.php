<?php

namespace App\Http\Controllers\Api\V1\Announcement;


use App\Models\Ebook;
use App\Models\Invoice;
use App\Traits\ApiResponse;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\AnnouncementRead;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Traits\PaginatedResourceTrait;
use App\Services\Api\V1\AnnouncementService;
use App\Services\Api\V1\Student\EbookService;
use App\Services\Api\V1\Student\InvoiceService;
use App\Http\Resources\Api\V1\AnnouncementResource;
use App\Http\Resources\Api\V1\Student\Ebook\EbookResource;
use App\Http\Resources\Api\V1\Student\Invoice\InvoiceResource;

class AnnouncementController extends Controller
{
    use ApiResponse, PaginatedResourceTrait;
    protected $announcementService;


    public function __construct(AnnouncementService $announcementService)
    {
        $this->announcementService = $announcementService;

    }

    public function myAnnouncements(Request $request)
    {

         $announcements = $this->announcementService->getAllAnnouncements(withRelations: ['myself_read.readable']);
        // return $announcements;
        try {
            if (!$announcements) {
                return $this->error('No announcements found', 404);
            }

            $resource =  $this->paginatedResponse($announcements, AnnouncementResource::class);
            return $this->success($resource);
        } catch (\Exception $e) {
            logger($e->getMessage());
            return $this->error($e->getMessage());
        }
    }
    public function getTodayAnnouncements(Request $request)
    {

         $announcements = $this->announcementService->getAllAnnouncements(withRelations: ['myself_read.readable'], type: 'today');

        try {
            if (!$announcements) {
                return $this->error('No announcements found', 404);
            }

            $resource =  $this->paginatedResponse($announcements, AnnouncementResource::class);
            return $this->success($resource);
        } catch (\Exception $e) {
            logger($e->getMessage());
            return $this->error($e->getMessage());
        }
    }

    // Mark a single announcement as read
    public function markAsRead(Request $request)
    {
        $request->validate([
            'announcement_id' => 'required|exists:announcements,id',
        ]);

        $id = $request->announcement_id;

       $read = $this->announcementService->markAsRead($id);
       if(!$read){
        return $this->error('Announcement not found', 404);
       }

        return $this->success($read,'Marked as read');
    }


}
