<?php

namespace App\Http\Controllers\Student\Exam;

use App\Http\Controllers\Controller;
use App\Models\EnrollExam;
use App\Models\Exam;
use App\Models\ExamResult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use stdClass;

class ExamController extends Controller
{
    public function index()
    {
        set_page_meta('My Exams');

        $data['pendingExams'] = EnrollExam::whereUserId(auth()->id())->pending()->with('student', 'exam')->get();

        $data['completedExams'] = EnrollExam::whereUserId(auth()->id())->completed()->with('student', 'exam', 'result')->get();

        return view('student.exam.index', $data);
    }

    public function examInstruction($examUuid, $enrollUuid)
    {
        set_page_meta('Exam');

        $data['enrollExam'] = EnrollExam::whereUuid($enrollUuid)->firstOrfail();

        if ($data['enrollExam']->status == COMPLETE && $data['enrollExam']->attempt == 3) {
            return redirect()->route('student.exams');
        }

        $data['exam'] = Exam::whereUuid($examUuid)->firstOrFail();

        if ($data['exam']->questions()->count() == 0) {

            something_wrong_flash('Exam not available right now! please try again later');

            return back();
        }

        return view('student.exam.instruction', $data);
    }

    public function examStart($examUuid, $enrollUuid)
    {
        $data['enrollExam'] = EnrollExam::whereUuid($enrollUuid)->firstOrfail();

        if ($data['enrollExam']->status == COMPLETE && $data['enrollExam']->attempt == 3) {
            return redirect()->route('student.exams');
        }

        // If inprogress close the exam
        if ($data['enrollExam']->status == INPROGRESS) {

            $stdObject = new stdClass();
            $stdObject->exam_id = $data['enrollExam']->exam_id;
            $stdObject->enroll_id = $data['enrollExam']->id;

            $stdObject->score = $stdObject->correct_ans = $stdObject->wrong_ans = $stdObject->total_qus = 0;

            $this->insertExamResult($stdObject);

            return redirect()->route('student.exams');
        }

        // Exam and Question Data

        $data['exam'] = Exam::whereUuid($examUuid)->firstOrFail();

        $allQuestions = $this->getQuestions($data['exam']->uuid);

        if (count($allQuestions) < 1) {
            something_wrong_flash('Not Enough questions to start exam!');

            return redirect()->route('student.exams');
        }

        $data['questions'] = json_encode($allQuestions);

        if ($data['enrollExam']->status == PENDING) {

            $data['enrollExam']->update([
                'status' => INPROGRESS,
            ]);
        }

        return view('student.exam.start', $data);
    }

    public function getQuestions($uuid)
    {
        $questions = Exam::where('uuid', $uuid)->firstOrFail()->questions()->get();

        $responses = [];

        if (count($questions) > 0) {

            foreach ($questions as $key => $qus) {
                $responses[$key]['question'] = $qus->title;
                $responses[$key]['correctAnswer'] = $qus->answer;
                $responses[$key]['hint'] = $qus->hint;
                $responses[$key]['explanation'] = $qus->explanation;

                foreach ($qus->options as $opt) {
                    if (is_null($opt->title)) {
                        continue;
                    }
                    $responses[$key]['answers'][$opt->option] = $opt->title;
                }
            }
        }

        return $responses;
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

        $this->insertExamResult($request);

        $passMark = Exam::findOrFail($request->exam_id)->pass_mark;
        $isPassed = $request->score >= $passMark;
        // Update the is_passed column in ExamResult table
        $data = ExamResult::where('exam_id', $request->exam_id)
            ->where('enroll_exam_id', $request->enroll_id)
            ->update(['is_passed' => $isPassed]);

        // Return a JSON response
        return response()->json([
            'success' => true,
            'message' => 'Exam status updated successfully',
        ], 200);
    }

    public function insertExamResult($object)
    {
        DB::transaction(function () use ($object) {

            ExamResult::create([
                'exam_id' => $object->exam_id,
                'enroll_exam_id' => $object->enroll_id,
                'user_id' => auth()->id(),
                'score' => $object->score,
                'correct_ans' => $object->correct_ans,
                'wrong_ans' => $object->wrong_ans,
                'total_qus' => $object->total_qus,
            ]);

            $enrollExam = EnrollExam::whereUserId(auth()->id())->whereExamId($object->exam_id)->first();

            if ($enrollExam) {
                $enrollExam->update([
                    'status' => COMPLETE,
                    'attempt' => $enrollExam->attempt + 1,
                ]);
            }
        });
    }

    public function getExamResults(Request $request)
    {
        $results = ExamResult::whereUserId(auth()->id())->whereEnrollExamId($request->enroll_id)->get();

        return view('student.exam.render.result')->withResults($results);
    }
}
