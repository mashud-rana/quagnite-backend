<?php

namespace App\Http\Controllers\Playground;

use App\Models\Playground;
use App\Http\Controllers\Controller;

class TestPlayController extends Controller
{
    public function index()
    {
        $playground = Playground::where('type', PlAYGD_ANSIBLE)->first();

        $instructions = $playground ? $playground->instruction : '';

        return view('frontend.playground.test', ['instructions' => json_encode($instructions)]);
    }
}
