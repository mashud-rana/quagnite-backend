<?php

namespace App\Http\Controllers\Playground;

use App\Http\Controllers\Controller;
use App\Models\Playground;
use App\Services\Playground\OneCompilerService;
use Illuminate\Http\Request;

class BashPlayController extends Controller
{
    public function __construct(protected OneCompilerService $oneCompilerService)
    {
    }

    public function index()
    {
        $user = auth()->user();
        return view('frontend.playground.bash', compact('user'));
    }

    public function getMcq()
    {
        // $bash_id = Playground::select('id')->where('type', PlAYGD_BASH)->first()->id;
        // $questions = PlayQuestion::where('playground_id', $bash_id)->with('options')->get();

        $questions = Playground::select('id')->where('type', PlAYGD_BASH)->first()->questions()->get();

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

    public function runBashCode(Request $request)
    {
        return $this->oneCompilerService->makeRequest('bash', 'index.sh', $request->code);
    }
}
