<?php

namespace App\Http\Controllers\Api\V1\Student\Exam;


use stdClass;
use App\Models\Exam;
use App\Models\EnrollExam;
use App\Models\ExamResult;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;


use Illuminate\Support\Facades\Hash;
use App\Traits\PaginatedResourceTrait;
use App\Services\Api\V1\Student\ExamService;
use App\Http\Resources\Api\V1\Student\Exam\ExamResource;
use App\Http\Resources\Api\V1\Student\Exam\EnrollExamResource;
use App\Http\Resources\Api\V1\Student\Bootcamp\EnrolledBootcampsResource;

class ExamController extends Controller
{
    use ApiResponse, PaginatedResourceTrait;
    protected $examService;

    public function __construct(ExamService $examService)
    {
        $this->examService = $examService;
    }


    public function myExams(Request $request)
    {

        $examps = $this->examService->getMyExams(withRelations: ['exam.questions','result']);
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
        $enrollExam = EnrollExam::where('uuid', $enrollUuid)->firstOrFail();
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
            'exam_id' => 'required',
            'enroll_id' => 'required',
            'score' => 'required',
            'correct_ans' => 'required',
            'wrong_ans' => 'required',
            'total_qus' => 'required',
        ]);

        $this->examService->insertExamResult($request);

        $passMark = Exam::findOrFail($request->exam_id)->pass_mark;
        $isPassed = $request->score >= $passMark;
        // Update the is_passed column in ExamResult table
        $data = ExamResult::where('exam_id', $request->exam_id)
            ->where('enroll_exam_id', $request->enroll_id)
            ->update(['is_passed' => $isPassed]);

        return $this->success(null, 'Exam submitted successfully');
    }


     public function getExamResults(Request $request)
    {
        $results = ExamResult::whereUserId(auth()->id())->whereEnrollExamId($request->enroll_id)->get();

        return $this->success($results, 'Exam results fetched successfully');
    }

}
