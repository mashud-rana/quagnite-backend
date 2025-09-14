<?php

namespace App\Http\Controllers\Student\Playground;

use App\Http\Controllers\Controller;
use App\Models\EnrollPlayground;

class PlaygroundController extends Controller
{
    public function index()
    {
        set_page_meta('My Playgrounds');

        $playground = EnrollPlayground::where('user_id', auth()->user()->id)
            ->with('playground')
            ->get();

        return view('student.playground.index', compact('playground'));
    }
}
