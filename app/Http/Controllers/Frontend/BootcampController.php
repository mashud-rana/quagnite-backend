<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Bootcamp;

class BootcampController extends Controller
{
    public function index()
    {
        set_page_meta('Bootcamps');

        $data['bootcamps'] = Bootcamp::approved()
            ->inRandomOrder()
            ->limit(4)
            ->with(['user', 'category'])
            ->get();

        return view('frontend.bootcamp.index', $data);
    }

    public function allBootcamps()
    {
        set_page_meta('Bootcamps');

        $data['recommendBootcamps'] = Bootcamp::with(['user', 'category'])
            ->approved()
            ->inRandomOrder()
            ->paginate(4);

        $data['topBootcamps'] = Bootcamp::with(['user', 'category', 'reviews'])
            ->approved()
            ->latest()
            ->inRandomOrder()
            ->paginate(4);

        return view('frontend.bootcamp.all-bootcamp', $data);
    }

    public function details($slug)
    {
        $bootcamp = Bootcamp::with(['user', 'lessons.lecture', 'category', 'reviews.user'])
            ->approved()
            ->where('slug', $slug)
            ->firstOrFail();

        if (! $bootcamp) {
            abort(404);
        }

        set_page_meta('Bootcamp Details: '.$bootcamp->title);

        $data['bootcamp'] = $bootcamp;

        return view('frontend.bootcamp.details', $data);
    }
}
