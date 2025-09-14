<?php

namespace App\Http\Controllers\Member\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use App\Models\Bootcamp;
use App\Models\Course;

class DashboardController extends Controller
{
    public function index()
    {
        set_page_meta('Dashboard');
        $data['recent_bootcamps'] = Bootcamp::approved()->with('user', 'category', 'reviews')
            ->latest()
            ->take(4)
            ->get();

        $data['recent_courses'] = Course::approved()->with('user', 'category', 'reviews')
            ->latest()
            ->take(4)
            ->get();

        return view('member.dashboard', $data);
    }

    public function getAnnouncements()
    {
        set_page_meta('Announcements');
        $announcements = Announcement::orderBy('id', 'desc')->paginate(5);

        return view('member.announcement.index', compact('announcements'));
    }
}
