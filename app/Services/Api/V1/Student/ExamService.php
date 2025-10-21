<?php

namespace App\Services\Api\V1\Student;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Course;
use App\Models\Bootcamp;
use App\Models\EnrollExam;
use App\Models\CourseLesson;
use App\Models\EnrollCourse;
use App\Models\CourseLecture;
use App\Services\BaseService;
use App\Models\CourseCategory;
use App\Models\EnrollBootcamp;
use App\Models\DifficultyLevel;
use App\Services\Utils\FileService;
use Illuminate\Support\Facades\Auth;

class ExamService extends BaseService
{
    protected $model;
    protected $fileService;

    public function __construct(FileService $fileService)
    {
        $this->model = EnrollExam::class;
        $this->fileService = $fileService;
    }

    public function getMyExams(
        array $selectedFields = ['*'],
        array $withRelations = []
    )
    {
        $request = request();


        $perPage = $request->get('per_page', 10);
        $type = $request->get('type', 'upcoming'); // 'upcoming', 'ongoing', 'complete'
        $today = Carbon::today();

        $query = $this->model::where('user_id', auth()->id())
            ->select($selectedFields)
            ->with($withRelations);

        if ($type === 'upcoming') {

             $query->pending()->where('attempt','=', 0);

        } elseif ($type === 'ongoing') {
        //    $query->notCompleted()->doesntHave('result');
            $query->where('attempt', '<', 3)->completed();
        } elseif ($type === 'complete') {
           $query->completed()->where('attempt','>=', 3);
        }

        return $query->paginate($perPage);
    }

    public function getBootcampDetailsBySlug($slug,
        array $selectedFields = ['*'],
        array $withRelations = []
    ){
        $bootcamp = Bootcamp::where('slug', $slug)->with($withRelations)->first();

        return $bootcamp;


    }


}
