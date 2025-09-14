<?php

namespace App\Http\Controllers\Student\Certificate;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use App\Models\EnrollCourse;
use App\Models\ExamResult;
use App\Models\StudentCertificate;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class CertificateController extends Controller
{
    private function generateUniqueCertificateNumber()
    {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $codeLength = 12;

        $certificateNumber = '';
        for ($i = 0; $i < $codeLength; $i++) {
            $certificateNumber .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $certificateNumber;
    }

    public function index()
    {
        set_page_meta('Certificate');

        // Get EnrollCourse records with eager loading
        $enrollCourses = EnrollCourse::where('user_id', Auth::id())
            ->where('status', COMPLETE)
            ->with(['student', 'course'])
            ->get();

        foreach ($enrollCourses as $enrollCourse) {
            // Check if a certificate already exists
            $existingCertificate = StudentCertificate::where('certifiable_type', EnrollCourse::class)
                ->where('certifiable_id', $enrollCourse->id)
                ->first();

            // If a certificate does not exist, create one
            if (! $existingCertificate) {
                $enrollCourse->studentCertificate()->create([
                    'user_id' => auth()->user()->id,
                    'certificate_number' => $this->generateUniqueCertificateNumber(),
                ]);
            }
        }

        // Get ExamResult records with eager loading
        $examResults = ExamResult::where('user_id', Auth::id())
            ->where('is_passed', true)
            ->with(['user', 'exam'])
            ->get();

        foreach ($examResults as $examResult) {
            // Check if a certificate already exists
            $existingCertificate = StudentCertificate::where('certifiable_type', ExamResult::class)
                ->where('certifiable_id', $examResult->id)
                ->first();

            // If a certificate does not exist, create one
            if (! $existingCertificate) {
                $examResult->studentCertificate()->create([
                    'user_id' => auth()->user()->id,
                    'certificate_number' => $this->generateUniqueCertificateNumber(),
                ]);
            }
        }

        // Retrieve the certificates with eager loading
        $data['certificates'] = StudentCertificate::with('certifiable')
            ->whereHasMorph('certifiable', [EnrollCourse::class, ExamResult::class])
            ->paginate(10);

        return view('student.certificate.index', $data);
    }

    public function generateCertificate($certificateUuid)
    {
        $student = Auth::user();
        $certificate = StudentCertificate::with('certifiable')->where('uuid', $certificateUuid)
            ->where('user_id', $student->id)
            ->firstOrFail();
        $certificate_text = Certificate::firstOrFail();

        $pdf = PDF::loadView('student.certificate.certificate', compact('certificate', 'student', 'certificate_text'));

        return $pdf->download($certificate->certificate_number.'.pdf');
    }

    public function viewCertificate($certificateUuid)
    {
        $student = Auth::user();
        $certificate = StudentCertificate::with('certifiable')->where('uuid', $certificateUuid)
            ->where('user_id', $student->id)
            ->firstOrFail();

        $certificate_text = Certificate::firstOrFail();
        $pdf = PDF::loadView('student.certificate.certificate', compact('certificate', 'student', 'certificate_text'));

        return $pdf->stream($certificate->certificate_number.'.pdf');
    }
}
