<?php

namespace App\Services\Api\V1\Student;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Ebook;
use App\Models\Course;
use App\Models\Bootcamp;
use App\Models\CourseLesson;
use App\Models\EnrollCourse;
use App\Models\CourseLecture;
use App\Services\BaseService;
use App\Models\CourseCategory;
use App\Models\EnrollBootcamp;
use App\Models\DifficultyLevel;
use App\Models\EnrollEbook;
use App\Services\Utils\FileService;
use Illuminate\Support\Facades\Auth;

class EbookService extends BaseService
{
    protected $model;
    protected $fileService;

    public function __construct(FileService $fileService)
    {
        $this->model = Ebook::class;
        $this->fileService = $fileService;
    }

    public function getMyEbooks(
        array $selectedFields = ['*'],
        array $withRelations = []
    )
    {
        $request = request();

        $perPage = $request->get('per_page', 10);


        $query = EnrollEbook::where('user_id', auth()->id())
            ->select($selectedFields)
            ->with($withRelations);

        return $query->paginate($perPage);
    }



}
