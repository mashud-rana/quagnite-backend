<?php

namespace App\Http\Controllers\Admin\Settings;

use App\DataTables\Admin\PlaygroundQuestionDataTable;
use App\Http\Controllers\Controller;
use App\Models\Playground;
use App\Models\Question;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class PlaygroundQuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:All Questions|Edit Question|Create Question|Delete Question', ['only' => ['index']]);
        $this->middleware('permission:Create Question', ['only' => ['create', 'store']]);
        $this->middleware('permission:Edit Question', ['only' => ['edit', 'update']]);
        $this->middleware('permission:Delete Question', ['only' => ['delete']]);
    }

    public function index(PlaygroundQuestionDataTable $dataTable)
    {
        set_page_meta('Playground Questions');

        return $dataTable->render('admin.settings.questions.index');
    }

    public function create()
    {
        set_page_meta('Create Questions');

        $playgrounds = Playground::select('id', 'title')->get();

        return view('admin.settings.questions.create', [
            'playgrounds' => $playgrounds,
        ]);
    }

    public function store(Request $request)
    {
        try {
            $this->validation($request);

            DB::transaction(function () use ($request) {
                $playground = Playground::findOrFail($request->playground_id);

                $question = $playground->questions()->create([
                    'title' => $request->title,
                    'answer' => $request->answer,
                    'hint' => $request->hint,
                    'explanation' => $request->explanation,
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
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (QueryException $e) {
            log_error($e);
            something_wrong_flash();

            return back();
        } catch (\Exception $e) {
            log_error($e);
            something_wrong_flash();

            return back();
        }
    }

    public function edit(string $id)
    {
        $data['question'] = Question::findOrFail($id);

        $data['options'] = $data['question']->options()->pluck('title')->toArray();

        $data['playgrounds'] = Playground::select('id', 'title')->get();

        return view('admin.settings.questions.edit', $data);
    }

    public function update(Request $request, string $id)
    {
        try {
            $this->validation($request);

            $question = Question::findOrFail($id);

            DB::transaction(function () use ($request, $question) {

                $question->update([
                    'questionable_id' => $request->playground_id,
                    'title' => $request->title,
                    'answer' => $request->answer,
                    'hint' => $request->hint,
                    'explanation' => $request->explanation,
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
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (QueryException $e) {
            log_error($e);
            something_wrong_flash();

            return back();
        } catch (\Exception $e) {
            something_wrong_flash();
            log_error($e);

            return back();
        }
    }

    public function delete(string $id)
    {
        try {
            DB::transaction(function () use ($id) {
                $question = Question::findOrFail($id);
                $question->options()->delete();
                $question->delete();
                record_deleted_flash();
            });

            return redirect()->back();
        } catch (\Exception $e) {

            something_wrong_flash();
            log_error($e);

            return redirect()->back();
        }
    }

    public function validation(Request $request)
    {
        $request->validate([
            'playground_id' => 'required',
            'title' => 'required',
            'answer' => 'required',
            'hint' => 'nullable|string',
            'explanation' => 'nullable|string',
            'options' => ['required', 'array'],
        ]);
    }
}
