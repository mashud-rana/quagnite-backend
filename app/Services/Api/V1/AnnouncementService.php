<?php

namespace App\Services\Api\V1;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Ebook;
use App\Models\Course;
use App\Models\Invoice;
use App\Models\Bootcamp;
use App\Models\EnrollEbook;
use App\Models\Announcement;
use App\Models\CourseLesson;
use App\Models\EnrollCourse;
use App\Models\CourseLecture;
use App\Services\BaseService;
use App\Models\CourseCategory;
use App\Models\EnrollBootcamp;
use App\Models\DifficultyLevel;
use App\Models\AnnouncementRead;
use App\Services\Utils\FileService;
use Illuminate\Support\Facades\Auth;

class AnnouncementService extends BaseService
{
    protected $model;
    protected $fileService;

    public function __construct(FileService $fileService)
    {
        $this->model = Announcement::class;
        $this->fileService = $fileService;
    }



    public function getAllAnnouncements(
        array $selectedFields = ['*'],
        array $withRelations = []
    )
    {
        $request = request();

        $perPage = $request->get('per_page', 10);

        $query =    $this->model::query()

        ->select($selectedFields)
        ->latest()
        ->with($withRelations);

        return $query->paginate($perPage);
    }

    public function markAsRead($announcement_id)
    {
        $user = Auth::user();
        $announcement = Announcement::findOrFail($announcement_id);

        return AnnouncementRead::updateOrCreate(
            [
                'announcement_id' => $announcement->id,
                'readable_id' => $user->id,
                'readable_type' => get_class($user),
            ],
            [
                'read_at' => now(),
            ]
        );
    }




}
