<?php

namespace App\Services\Api\V1\Student;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Ebook;
use App\Models\Course;
use App\Models\Resume;
use App\Models\Invoice;
use App\Models\Bootcamp;
use App\Models\ExamResult;
use App\Models\EnrollEbook;
use App\Models\CourseLesson;
use App\Models\EnrollCourse;
use Illuminate\Http\Request;
use App\Models\CourseLecture;
use App\Services\BaseService;
use App\Models\CourseCategory;
use App\Models\EnrollBootcamp;
use App\Models\DifficultyLevel;
use App\Models\StudentCertificate;
use App\Services\Utils\FileService;
use Illuminate\Support\Facades\Auth;

class ResumeService extends BaseService
{
    protected $model;
    protected $fileService;

    public function __construct(FileService $fileService)
    {
        $this->model = Resume::class;
        $this->fileService = $fileService;
    }




    public function getMyStudentResumes(
    array $selectedFields = ['*'],
    array $withRelations = []
    ) {
        $perPage = request('per_page', 10);
        // $search = request('search');

        $resumes = $this->model::query()
        ->where('user_id', auth()->id())
         ->select($selectedFields)
            ->with($withRelations)
            ->latest();

        return $resumes->paginate($perPage);


    }

   public function upload(Request $request)
    {
        $user_id = auth()->id();

        if (!$request->hasFile('file')) {
            throw new \Exception('No file uploaded');
        }

        $uploadedFile = $request->file('file');

        // Use your file service to store it
        $filePath = $this->fileService->upload($uploadedFile, 'resumes');

        // Create or update resume record (depending on your logic)
        return Resume::create([
            'user_id' => $user_id,
            'title'   => $request->title,
            'file'    => $filePath,
        ]);
    }

    public function deleteResume($uuid){
        $resume = Resume::where('uuid', $uuid)->first();

        if (! $resume || $resume->user_id != auth()->id()) {
            throw new \Exception('Resume not found or access denied');
        }

        // Delete the file from the server
        $this->fileService->delete($resume->file);

        // Delete the resume record from the database
        $resume->delete();
    }






}
