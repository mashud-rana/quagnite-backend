<?php

namespace App\Http\Controllers\Design;

use App\Http\Controllers\Controller;

class DesignController extends Controller
{
    public function index()
    {
        return view('design.something');
    }

    public function coaching()
    {
        return view('design.coaching');
    }

    public function onlineBootcamp()
    {
        return view('design.online-bootcamp');
    }

    public function courseDetails()
    {
        return view('design.course-details');
    }

    public function business()
    {
        return view('design.business');
    }

    public function helpdesk()
    {
        return view('design.helpdesk');
    }

    public function coaches()
    {
        return view('design.coaches-sechedule');
    }

    public function coachesGrid()
    {
        return view('design.coaches-sechedule-grid');
    }

    public function singleCoach()
    {
        return view('design.single-coach-details');
    }

    public function bootcampList()
    {
        return view('design.coaches-bootcump-grid');
    }

    public function blogList()
    {
        return view('design.blog-list');
    }

    public function examTest()
    {
        return view('design.exam-test');
    }

    public function examTestResult()
    {
        return view('design.exam-test-result');
    }

    public function playground()
    {
        return view('design.playground');
    }

    public function playgroundCompiler()
    {
        return view('design.playground-compiler');
    }

    public function aws()
    {
        return view('design.aws-button');
    }

    public function awsInfo()
    {
        return view('design.aws-info');
    }

    public function coachDetails()
    {
        return view('v1.Scheduled Availability');
    }
}
