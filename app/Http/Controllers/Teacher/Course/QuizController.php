<?php

namespace App\Http\Controllers\Teacher\Course;

use App\Models\Course;
use App\Models\Question;
use App\Models\CourseLesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class QuizController extends Controller
{
    public function __construct(
        protected Course $course,
        protected CourseLesson $lesson,
    ) {
    }

    public function index($lessonUuid, $courseUuid)
    {
        set_page_meta('Course Quizes');

        $data['course'] = $this->course->whereUuid($courseUuid)->select('uuid', 'title')->firstOrFail();
        $data['lesson'] = $this->lesson->whereUuid($lessonUuid)->select('id', 'uuid', 'title')->firstOrFail();
        $data['questions'] = $data['lesson']->questions()->get();
        $data['answers'] = ['a', 'b', 'c', 'd'];

        return view('teacher.course.quiz.index', $data);
    }

    public function adminQuiz($lessonUuid, $courseUuid)
    {
        set_page_meta('Course Quizes');

        $data['course'] = $this->course->whereUuid($courseUuid)->select('uuid', 'title')->firstOrFail();
        $data['lesson'] = $this->lesson->whereUuid($lessonUuid)->select('id', 'uuid', 'title')->firstOrFail();
        $data['questions'] = $data['lesson']->questions()->get();
        $data['answers'] = ['a', 'b', 'c', 'd'];

        return view('admin.course.quiz.index', $data);
    }

    public function quizCreate($uuid)
    {
        set_page_meta('Create Quiz');

        $data['lesson'] = $this->lesson->whereUuid($uuid)->select('uuid')->firstOrFail();

        return view('teacher.course.quiz.create', $data);
    }

    public function store(Request $request)
    {
        $this->validation($request);

        DB::transaction(function () use ($request) {

            $lesson = $this->lesson->findOrFail($request->lesson_id);

            $question = $lesson->questions()->create([
                'title' => $request->title,
                'answer' => $request->answer,
            ]);

            $answers = ['a', 'b', 'c', 'd'];

            foreach ($request->options as $key => $value) {

                $question->options()->create([
                    'title' => $value,
                    'option' => $answers[$key],
                ]);
            }
        }, 5);

        record_created_flash();

        return back();
    }


    public function update(Request $request, string $id)
    {
        $this->validation($request);

        $question = Question::findOrFail($id);

        DB::transaction(function () use ($request, $question) {

            $question->update([
                'title' => $request->title,
                'answer' => $request->answer,
            ]);

            $question->options()->delete();

            $answers = ['a', 'b', 'c', 'd'];

            foreach ($request->options as $key => $value) {

                $question->options()->create([
                    'title' => $value,
                    'option' => $answers[$key],
                ]);
            }
        }, 5);

        record_updated_flash();

        return back();
    }

    public function destroy(string $id)
    {
        DB::transaction(function () use ($id) {

            $question = Question::findOrFail($id);
            $question->options()->delete();
            $question->delete();
            record_deleted_flash();
        });

        return redirect()->back();
    }

    public function validation(Request $request)
    {
        $request->validate([
            'lesson_id' => 'required',
            'title' => 'required',
            'answer' => 'required',
            // 'hint' => 'nullable|string',
            // 'explanation' => 'nullable|string',
            'options' => ['required', 'array'],
        ]);
    }
}
