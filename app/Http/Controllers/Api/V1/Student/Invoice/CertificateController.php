<?php

namespace App\Http\Controllers\Api\V1\Student\Invoice;


use App\Models\Ebook;
use App\Models\Invoice;
use App\Models\EnrollExam;
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
                        // ExamResult::class   => ['exam'],
                        EnrollExam::class   => ['exam']
                    ]);
                }
            ]
        );
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


    public function download($uuid)
    {
        try {



            $certificate = StudentCertificate::with('certifiable')->where('uuid', $uuid)
                // ->when($student, function ($query) use ($student) {
                //     $query->where('user_id', $student->id);
                // })
                ->with('certifiable.student')
                ->firstOrFail();

            if(!$certificate){
                return $this->error('Certificate not found', 404);
            }

            $student = $certificate->certifiable->student;
            $certificate_text = Certificate::firstOrFail();

            $pdf = PDF::loadView('student.Api.V1.certificate.certificate', compact('certificate', 'student', 'certificate_text'));

            $fileName = $certificate->certificate_number . '.pdf';


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
    public function viewCertificate($uuid)
    {
        try {
            $student = auth()->check() ? Auth::user() : null;
            $certificate = StudentCertificate::with('certifiable')->where('uuid', $uuid)
                //  ->when($student, function ($query) use ($student) {
                //     $query->where('user_id', $student->id);
                // })
                ->with('certifiable.student')
                ->firstOrFail();
            if(!$certificate){
                return $this->error('Certificate not found', 404);
            }
            $student = $certificate->certifiable->student;
            $certificate_text = Certificate::firstOrFail();

            $pdf = PDF::loadView('student.Api.V1.certificate.certificate', compact('certificate', 'student', 'certificate_text'));

            $fileName = $certificate->certificate_number . '.pdf';



            return response($pdf->output(), 200)
                ->header('Content-Type', 'application/pdf')
                ->header('Content-Disposition', 'inline; filename="' . $fileName . '"')
                ->header('Access-Control-Expose-Headers', 'Content-Disposition');
        } catch (\Exception $e) {
            logger()->error('Invoice view error: ' . $e->getMessage());
            return response()->json(['error' => 'Something went wrong'], 500);
        }
    }

     public function certificates($uuid)
    {
        try {

            $certificate = StudentCertificate::with('certifiable')->where('uuid', $uuid)

                ->with(
                    [
                        'certifiable.student',
                        'certifiable.exam'
                    ]
                )
                ->firstOrFail();
            if(!$certificate){
                return $this->error('Certificate not found', 404);
            }
            // dd($certificate);
            return $this->success(new StudentCertificateResource($certificate));

        } catch (\Exception $e) {
            logger()->error('Invoice view error: ' . $e->getMessage());
            return response()->json(['error' => 'Something went wrong'], 500);
        }
    }








}
