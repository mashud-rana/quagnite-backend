<?php

namespace App\Http\Controllers\Playground;

use App\Http\Controllers\Controller;
use App\Models\Playground;

class PlaygroundController extends Controller
{
    public function index()
    {
        set_page_meta('Playground');
        $playground = Playground::all();
        return view('frontend.playground.index', compact('playground'));
    }

    public function playgroundDetails($slug)
    {
        set_page_meta('Playground Details');
        $data = Playground::with('category')->where('slug', $slug)->firstOrFail();

        return view('frontend.playground.details', compact('data'));
    }
    // public function playgroundDetails($slug)
    // {
    //     $data = PlayOverview::where();
    //     return view('frontend.playground.details');
    // }

    public function notAvailable()
    {
        return view('frontend.playground.not-available');
    }
    public function playPython()
    {
        set_page_meta('Python Playground');

        $data['title'] = 'Python';
        $data['url_name'] = 'python';

        return view('frontend.playground.common', $data);
    }

    public function playJava()
    {
        set_page_meta('Java Playground');

        $data['title'] = 'Java';
        $data['url_name'] = 'java';

        return view('frontend.playground.common', $data);
    }

    public function playGo()
    {
        set_page_meta('Go Playground');

        $data['title'] = 'Go';
        $data['url_name'] = 'go';

        return view('frontend.playground.common', $data);
    }

    public function playBash()
    {
        set_page_meta('Bash Playground');

        $data['title'] = 'Bash';
        $data['url_name'] = 'bash';

        return view('frontend.playground.common', $data);
    }
}
