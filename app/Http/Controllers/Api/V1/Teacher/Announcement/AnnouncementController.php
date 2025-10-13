<?php

namespace App\Http\Controllers\api\V1\Teacher\Announcement;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\Teacher\CourseAnnouncement\CourseAnnouncementResource;
use App\Services\Api\V1\Teacher\Announcement\AnnouncementService;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    use ApiResponse;
    public $announcementService;
    public function __construct(AnnouncementService $announcementService)
    {
         $this->announcementService = $announcementService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $announcements = $this->announcementService->get();
        return $this->success(CourseAnnouncementResource::collection($announcements), 'Announcement List');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
