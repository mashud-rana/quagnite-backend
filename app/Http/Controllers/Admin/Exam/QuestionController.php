<?php

namespace App\Http\Controllers\Admin\Exam;

use App\Models\Exam;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    public function __construct(
        protected Exam $exam
    ) {
    }

    public function index($uuid)
    {
        set_page_meta('Exam Questions');

        $data['exam'] = $this->exam->whereUuid($uuid)->select('id')->firstOrFail();

        $data['questions'] = $data['exam']->questions()->with('options')->get();

        $data['answers'] = ['a', 'b', 'c', 'd'];

        return view('admin.exam.questions', $data);
    }

    public function store(Request $request)
    {
        $this->validation($request);

        DB::transaction(function () use ($request) {

            $exam = $this->exam->findOrFail($request->exam_id);

            $question = $exam->questions()->create([
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
            'exam_id' => 'required',
            'title' => 'required',
            'answer' => 'required',
            // 'hint' => 'nullable|string',
            // 'explanation' => 'nullable|string',
            'options' => ['required', 'array'],
        ]);
    }
}
