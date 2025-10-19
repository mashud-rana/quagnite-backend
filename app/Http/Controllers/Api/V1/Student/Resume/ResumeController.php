<?php

namespace App\Http\Controllers\Api\V1\Student\Resume;


use App\Models\Ebook;
use App\Models\Resume;
use App\Models\Invoice;
use App\Models\ExamResult;
use App\Models\Certificate;
use App\Traits\ApiResponse;
use App\Models\EnrollCourse;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\StudentCertificate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Traits\PaginatedResourceTrait;
use Illuminate\Support\Facades\Storage;
use App\Services\Api\V1\Student\EbookService;
use App\Services\Api\V1\Student\ResumeService;
use App\Services\Api\V1\Student\InvoiceService;
use App\Services\Api\V1\Student\CertificateService;
use App\Http\Resources\Api\V1\Student\Ebook\EbookResource;
use App\Http\Resources\Api\V1\Student\Resume\ResumeResource;
use App\Http\Resources\Api\V1\Student\Invoice\InvoiceResource;
use App\Http\Resources\Api\V1\Student\Invoice\StudentCertificateResource;

class ResumeController extends Controller
{
    use ApiResponse, PaginatedResourceTrait;
    protected $resumeService;


    public function __construct(ResumeService $resumeService)
    {
        $this->resumeService = $resumeService;

    }

    public function myResumes(Request $request)
    {

        $resumes = $this->resumeService->getMyStudentResumes();
        // return $resumes;
        try {
            if (!$resumes) {
                return $this->error('No resumes found', 404);
            }

            $resource =  $this->paginatedResponse($resumes, ResumeResource::class);
            return $this->success($resource);
        } catch (\Exception $e) {
            logger($e->getMessage());
            return $this->error($e->getMessage());
        }
    }


    public function download($uuid)
    {
        try {
            $resume = Resume::whereUuid($uuid)->firstOrFail();
            $path = $resume->file;
            $disk = config('settings.storage_driver');

            if (Storage::disk($disk)->exists($path)) {
                $fileContents = Storage::disk($disk)->get($path);
                $fileName = $resume->title ?: pathinfo($path, PATHINFO_FILENAME);
                $fileExtension = pathinfo($path, PATHINFO_EXTENSION);
                $downloadFileName = $fileName.'.'.$fileExtension;

                return response($fileContents)
                    ->header('Content-Type', Storage::disk($disk)->mimeType($path))
                    ->header('Content-Disposition', 'inline; filename="'.$downloadFileName.'"');
            } else {
                return back()->with('error', 'File not found.');
            }
        } catch (\Exception $e) {
            logger($e);

            return back();
        }
    }

    public function uploadResume(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf,doc,docx|max:10000', // 10MB limit
            'title' => 'required|string|max:255',
        ]);

        try {
            $upload = $this->resumeService->upload($request);

            return $this->success(new ResumeResource($upload), 'Resume uploaded successfully!');
        } catch (\Throwable $e) {
            logger()->error('Resume upload failed: ' . $e->getMessage(), [
                'user_id' => auth()->id(),
                'trace' => $e->getTraceAsString()
            ]);

            return $this->error('Failed to upload resume. Please try again later.', 500);
        }
    }


    public function deleteResume($uuid)
    {
        try {
            $this->resumeService->deleteResume($uuid);

            return $this->success(null, 'Resume deleted successfully!');
        } catch (\Throwable $e) {
            logger()->error('Resume deletion failed: ' . $e->getMessage(), [
                'user_id' => auth()->id(),
                'trace' => $e->getTraceAsString()
            ]);

            return $this->error('Failed to delete resume. Please try again later.', 500);
        }
    }












}
