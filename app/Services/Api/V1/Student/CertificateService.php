<?php

namespace App\Services\Api\V1\Student;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Ebook;
use App\Models\Course;
use App\Models\Invoice;
use App\Models\Bootcamp;
use App\Models\ExamResult;
use App\Models\EnrollEbook;
use App\Models\CourseLesson;
use App\Models\EnrollCourse;
use App\Models\CourseLecture;
use App\Services\BaseService;
use App\Models\CourseCategory;
use App\Models\EnrollBootcamp;
use App\Models\DifficultyLevel;
use App\Models\StudentCertificate;
use App\Services\Utils\FileService;
use Illuminate\Support\Facades\Auth;

class CertificateService extends BaseService
{
    protected $model;
    protected $fileService;

    public function __construct(FileService $fileService)
    {
        $this->model = StudentCertificate::class;
        $this->fileService = $fileService;
    }



    public function getMyStudentCertificates(
        array $selectedFields = ['*'],
        array $withRelations = []
    ) {
        $perPage = request('per_page', 10);
        $search = request('search');
        $certifiable_types = request('certifiable_types');

        $query = StudentCertificate::query()
            ->where('user_id', auth()->id())
            ->whereHasMorph(
                'certifiable',
                [EnrollCourse::class, ExamResult::class],
                function ($q, $type) use ($search) {
                    if ($search) {
                        if ($type === EnrollCourse::class) {
                            $q->whereHas('course', function ($sub) use ($search) {
                                $sub->where('title', 'like', "%{$search}%");
                            });
                        }

                        if ($type === ExamResult::class) {
                            $q->whereHas('exam', function ($sub) use ($search) {
                                $sub->where('title', 'like', "%{$search}%");
                            });
                        }
                    }
                }
            )
            ->when($certifiable_types, function ($q) use ($certifiable_types) {
                $types = explode(',', $certifiable_types);
                $mappedTypes = [];

                if (in_array('course', $types)) {
                    $mappedTypes[] = EnrollCourse::class;
                }
                if (in_array('exam', $types)) {
                    $mappedTypes[] = ExamResult::class;
                }

                if (!empty($mappedTypes)) {
                    $q->whereIn('certifiable_type', $mappedTypes);
                }
            })
            ->select($selectedFields)
            ->latest()
            // ->with([
            //     'certifiable' => function ($morphTo) {
            //         $morphTo->morphWith([
            //             EnrollCourse::class => ['course'],
            //             ExamResult::class   => ['exam'],
            //         ]);
            //     },
            // ]);
            ->with($withRelations);

        return $query->paginate($perPage);
    }



    public function generateCourseCertificates($enroll_course_id)
    {
        $enrollCourse = EnrollCourse::where('id', $enroll_course_id)
            ->where('user_id', auth()->user()->id)
            ->where('status', COMPLETE)

            ->first();
        if(!$enrollCourse){
            return ;
        }
        // Check if a certificate already exists
        $existingCertificate = StudentCertificate::where('certifiable_type', EnrollCourse::class)
            ->where('certifiable_id', $enrollCourse->id)
            ->first();

        // If a certificate does not exist, create one
        if (! $existingCertificate) {
            $enrollCourse->studentCertificate()->create([
                'user_id' => auth()->user()->id,
                'certificate_number' => generateUniqueCertificateNumber(),
            ]);
        }
    }

    public function generateExamResultCertificates($exam_result_id)
    {
        $examResult = ExamResult::where('user_id', Auth::id())
            ->where('is_passed', true)

            ->find($exam_result_id);
        if(!$examResult){
            return ;
        }
        // Check if a certificate already exists
        $existingCertificate = StudentCertificate::where('certifiable_type', ExamResult::class)
            ->where('certifiable_id', $examResult->id)
            ->first();

        // If a certificate does not exist, create one
        if (! $existingCertificate) {
            $examResult->studentCertificate()->create([
                'user_id' => auth()->user()->id,
                'certificate_number' => generateUniqueCertificateNumber(),
            ]);
        }
    }



}
