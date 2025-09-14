<?php

namespace App\Http\Controllers\Playground;

use App\Http\Controllers\Controller;
use App\Models\Playground;
use App\Models\PlayQuestion;
use App\Services\Playground\OneCompilerService;
use Illuminate\Http\Request;

class GoPlayController extends Controller
{
    public function __construct(protected OneCompilerService $oneCompilerService)
    {
    }

    public function index()
    {
        $user = auth()->user();
        return view('frontend.playground.go', compact('user'));
    }

    public function getMcq()
    {
        // $go_id = Playground::select('id')->where('type', PlAYGD_GO)->first()->id;
        // $questions = PlayQuestion::where('playground_id', $go_id)->with('options')->get();
        $questions = Playground::select('id')->where('type', PlAYGD_GO)->first()->questions()->get();

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

    public function runGoCode(Request $request)
    {
        return $this->oneCompilerService->makeRequest('go', 'index.go', $request->code);
    }
}
