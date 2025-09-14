<?php

namespace App\Http\Controllers\Playground;

use App\Http\Controllers\Controller;
use App\Models\Playground;
use App\Services\Playground\OneCompilerService;
use Illuminate\Http\Request;

class PythonPlayController extends Controller
{
    public function __construct(protected OneCompilerService $oneCompilerService)
    {
    }

    public function index()
    {
        $user = auth()->user();
        return view('frontend.playground.python', compact('user'));
    }

    public function getMcq()
    {
        // $python_id = Playground::select('id')->where('type', PlAYGD_PYTHON)->first()->id;
        // $questions = PlayQuestion::where('playground_id', $python_id)->with('options')->get();

        $questions = Playground::select('id')->where('type', PlAYGD_PYTHON)->first()->questions()->get();

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

    public function runPythonCode(Request $request)
    {
        return $this->oneCompilerService->makeRequest('python', 'index.py', $request->code);
    }

    public function getOutput()
    {
        return $this->oneCompilerService->makeRequest('php', 'index.php', '<?= "Welcome to PHP Playground"?>');
    }

    public function getJavaOutput()
    {
        return $this->oneCompilerService->makeRequest('java', 'index.java', 'public class Main {
            public static void main(String[] args) {
              System.out.println("Hello World");
            }
          }');
    }

    public function getGoOutput()
    {
        return $this->oneCompilerService->makeRequest('go', 'index.go', 'package main

        import "fmt"

        func main() {
            fmt.Println("hello world")
        }');
    }

    public function getBashOutput()
    {
        return $this->oneCompilerService->makeRequest('bash', 'index.sh', 'echo "Hello World"');
    }
}
