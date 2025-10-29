<?php

namespace App\Services\Api\V1\Student;

use Carbon\Carbon;
use App\Models\Exam;
use App\Models\User;
use App\Models\Course;
use App\Models\Bootcamp;
use App\Models\EnrollExam;
use App\Models\ExamResult;
use App\Models\CourseLesson;
use App\Models\EnrollCourse;
use Illuminate\Http\Request;
use App\Models\CourseLecture;
use App\Services\BaseService;
use App\Models\CourseCategory;
use App\Models\EnrollBootcamp;
use App\Models\DifficultyLevel;
use Illuminate\Support\Facades\DB;
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

             $query->pending();

        } elseif ($type === 'ongoing') {
        //    $query->notCompleted()->doesntHave('result');
            $query->where('attempt', '<', 3)->completed();
        } elseif ($type === 'complete') {
           $query->completed()->where('attempt','>=', 3);
        }

        return $query
        ->latest()
        ->paginate($perPage);
    }

    public function getBootcampDetailsBySlug($slug,
        array $selectedFields = ['*'],
        array $withRelations = []
    ){
        $bootcamp = Bootcamp::where('slug', $slug)->with($withRelations)->first();

        return $bootcamp;


    }

    public function insertExamResult($validated)
    {
        $exam = Exam::find($validated['exam_id']);
        $ExamResult= ExamResult::create([
            'exam_id' => $validated['exam_id'],
            'enroll_exam_id' => $validated['enroll_id'],
            'user_id' => auth()->id(),
            'score' => $validated['score'],
            'correct_ans' => $validated['correct_ans'],
            'wrong_ans' => $validated['wrong_ans'],
            'total_qus' => $validated['total_qus'],
            'exam_time' => $exam->duration,
            'exam_time_have' => $validated['exam_complete_duration'],
            'exam_complete_duration' => examTimePassed($exam->duration, $validated['exam_complete_duration']),
            'results' => json_decode($validated['results']),
        ]);

        $enrollExam = EnrollExam::whereUserId(auth()->id())->whereExamId($validated['exam_id'])->first();

        if ($enrollExam) {
            $enrollExam->update([
                'status' => COMPLETE,
                'attempt' => $enrollExam->attempt + 1,
            ]);
        }
        return $ExamResult;
    }


    public function getQuestions($uuid)
    {
        $questions = Exam::where('uuid', $uuid)->firstOrFail()->questions()->get();

        $responses = [];

        if (count($questions) > 0) {

            foreach ($questions as $key => $qus) {
                $responses[$key]['index'] = $key + 1;
                $responses[$key]['question'] = $qus->title;
                $responses[$key]['correctAnswer'] = $qus->answer;
                $responses[$key]['hint'] = $qus->hint;
                $responses[$key]['explanation'] = $qus->explanation;
                $responses[$key]['givenAnswer'] = '';
                $responses[$key]['isCorrect'] = '';

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


    public function uploadVideo(Request $request)
    {
        $uploadedFile = $request->file('video');

        if (!$uploadedFile || !$uploadedFile->isValid()) {
            throw new \Exception('Invalid or missing video file.');
        }

        // Store using your FileService
        $filePath = $this->fileService->upload($uploadedFile, ExamResult::VIDEO_PATH);

        return $filePath;
    }



}
