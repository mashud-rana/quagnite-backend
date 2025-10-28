<?php

namespace App\Http\Controllers\Api\V1\Student\Exam;


use stdClass;
use App\Models\Exam;
use App\Models\EnrollExam;
use App\Models\ExamResult;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Log;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Traits\PaginatedResourceTrait;
use App\Services\Api\V1\Student\ExamService;
use App\Services\Api\V1\Student\CertificateService;
use App\Http\Resources\Api\V1\Student\Exam\ExamResource;
use App\Http\Resources\Api\V1\Student\Exam\EnrollExamResource;
use App\Http\Resources\Api\V1\Student\Exam\ExamResultResource;
use App\Http\Resources\Api\V1\Student\Bootcamp\EnrolledBootcampsResource;

class ExamController extends Controller
{
    use ApiResponse, PaginatedResourceTrait;
    protected $examService;
    protected $certificateService;

    public function __construct(ExamService $examService, CertificateService $certificateService)
    {
        $this->examService = $examService;
        $this->certificateService = $certificateService;
    }


    public function myExams(Request $request)
    {

        $examps = $this->examService->getMyExams(withRelations: ['exam.questions','result','studentCertificate']);
        // return $examps;
        try {
            if (!$examps) {
                return $this->error('No enrolled exams found', 404);
            }

            $resource =  $this->paginatedResponse($examps, EnrollExamResource::class);
            return $this->success($resource);
        } catch (\Exception $e) {
            logger($e->getMessage());
            return $this->error($e->getMessage());
        }
    }

    public function examStart($examUuid, $enrollUuid)
    {
        // dd($examUuid, $enrollUuid);
        $enrollExam = EnrollExam::where('uuid', $enrollUuid)
        // ->where('attempt','<=',3 )
        ->first();
        // dd($enrollExam);
        if(!$enrollExam){
            return $this->error('Enroll exam not found',404);
        }
        $data['enrollExam'] = $enrollExam;

        if ($data['enrollExam']->status == 'complete' && $data['enrollExam']->attempt == 3) {
            return $this->error('Exam already completed', 403);
        }

        // If inprogress close the exam
        if ($data['enrollExam']->status == 'inprogress') {

            $stdObject = new stdClass();
            $stdObject->exam_id = $data['enrollExam']->exam_id;
            $stdObject->enroll_id = $data['enrollExam']->id;

            $stdObject->score = $stdObject->correct_ans = $stdObject->wrong_ans = $stdObject->total_qus = 0;

            $this->examService->insertExamResult($stdObject);

            return $this->error('Exam closed due to inprogress status',403);
        }

        // Exam and Question Data
        $exam = Exam::where('uuid', $examUuid)->firstOrFail();
        if(!$exam){
            return $this->error('Exam not found',404);
        }
        $data['exam'] = $exam;

        $allQuestions = $this->examService->getQuestions($data['exam']->uuid);

        if (count($allQuestions) < 1) {
            return $this->error('Not Enough questions to start exam!',403);

        }

        $data['questions'] = $allQuestions;

        if ($data['enrollExam']->status == 'pending') {

            $data['enrollExam']->update([
                'status' => 'inprogress',
            ]);
        }

       return $this->success($data, 'Exam started successfully');
    }

   public function examSubmit(Request $request)
    {
        $request->validate([
            'exam_id' => 'required|integer|exists:exams,id',
            'enroll_id' => 'required|integer|exists:enroll_exams,id',
            'score' => 'required|numeric',
            'correct_ans' => 'required|integer',
            'wrong_ans' => 'required|integer',
            'total_qus' => 'required|integer',
            'video' => 'required|file|mimetypes:video/webm,video/mp4|max:512000', // 500MB
        ]);

        DB::beginTransaction();

        try {
            // Step 1: Insert or update exam result
            $examResult = $this->examService->insertExamResult($request);

            // Step 2: Upload video file and get URL
            $videoUrl = $this->examService->uploadVideo($request);

            // Step 3: Determine pass/fail status
            $exam = Exam::findOrFail($request->exam_id);
            $isPassed = $request->score >= $exam->pass_mark;

            // Step 4: Update exam result record
            $examResult->update([
                'is_passed' => $isPassed,
                'video_url' => $videoUrl,
            ]);

            $this->certificateService->generateExamResultCertificates($examResult->id);

            DB::commit();

            return $this->success($examResult->fresh(), 'Exam submitted successfully.');

        } catch (\Exception $e) {
            DB::rollBack();

            Log::error('Exam submission failed: ' . $e->getMessage(), [
                'exam_id' => $request->exam_id ?? null,
                'enroll_id' => $request->enroll_id ?? null,
            ]);

            return $this->error('Failed to submit exam. Please try again later.');
        }
    }

   public function getExamProgressData($enrolluuid)
    {
        $enrollExam = EnrollExam::where('uuid', $enrolluuid)
            ->where('user_id', auth()->id())
            ->with(['studentCertificate'])
            ->firstOrFail();

        $results = ExamResult::where('enroll_exam_id', $enrollExam->id)
            ->orderBy('id', 'asc')
            ->get(['id', 'score', 'correct_ans', 'wrong_ans', 'total_qus', 'created_at']);

        if ($results->isEmpty()) {
            return response()->json([
                'message' => 'No attempts yet',
                'percentile' => null,
                'remaining_attempts' => 3,
                'chart' => [],
            ]);
        }

        // ✅ Calculate percentile
        $latest = $results->last();
        $allScores = ExamResult::where('exam_id', $enrollExam->exam_id)->pluck('score');
        $betterThan = $allScores->filter(fn($s) => $s < $latest->score)->count();
        $percentile = round(($betterThan / max($allScores->count(), 1)) * 100, 2);

        // ✅ Build chart dataset (scaled score)
        $chart = $results->map(function ($r, $index) {
            $score = floatval($r->score);
            $percent = $r->total_qus > 0 ? ($score / $r->total_qus) * 100 : 0;
            $skill = ($percent / 100) * 300; // scale 0–300

            return [
                'attempt' => $index + 1,
                'score' => round($score, 2),
                'percent' => round($percent, 2),
                'skill' => round($skill, 2),
                'label' => 'Attempt ' . ($index + 1),
            ];
        });
        return $this->success([
            'percentile' => $percentile,
            'remaining_attempts' => max(0, 3 - $enrollExam->attempt),
            'chart' => $chart,
            'yaxis_min'=> 0,
            'yaxis_max'=> $chart->max('skill') + 100,
            'attempt' => $enrollExam->attempt,
            'student_certificate' => $enrollExam->studentCertificate
        ], 'Exam progress data fetched successfully');

    }

     public function getExamResults(Request $request)
    {
        $enrollExam = EnrollExam::where('uuid', $request->enroll_uuid)
            ->where('user_id', auth()->id())
            ->firstOrFail();
        $results = ExamResult::query()
        ->where('user_id', auth()->id())
        ->where('enroll_exam_id', $enrollExam->id)
        // ->with(['user','exam'])
        ->get();

        return $this->success(ExamResultResource::collection($results), 'Exam results fetched successfully');
    }

}
