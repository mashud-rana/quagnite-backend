<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\EnrollCourse;
use App\Models\Subscription;
use App\Services\Subscription\SubscriptionService;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    protected $subscriptionService;

    public function __construct(
        SubscriptionService $subscriptionService,
    ) {
        $this->subscriptionService = $subscriptionService;
    }

    /**
     * Show the Home page.
     *
     * @return FrontController home page
     */
    public function index()
    {
        set_page_meta('Home');

        return view('frontend.home');
    }

    public function indexV1()
    {
        set_page_meta('Home');

        return view('frontend.home.index');
    }

    public function allCourses()
    {
        set_page_meta('Our Courses');

        $data['courses'] = Course::all();

        return view('frontend.course', $data);
    }

    public function courseDetails($slug)
    {
        $item = Course::where('slug', $slug)->first();

        $enrolled = null;
        if (Auth::check()) {
            $enrolled = EnrollCourse::where('user_id', Auth::id())->where('course_id', $item->id)->first();
            if ($enrolled != null) {
                $alReadyEnrolled = true; //enrolled
            } else {
                $alReadyEnrolled = false; //not enrolled
            }
        } else {
            $alReadyEnrolled = false; //not enrolled
        }

        return view('frontend.course-details', compact('item', 'alReadyEnrolled', 'enrolled'));
    }

    public function allPricings()
    {
        set_page_meta('Plans');

        $data['monthlySubscriptions'] = Subscription::whereStatus(ACTIVE)->whereType(MONTHLY)->get();

        $data['yearlySubscriptions'] = Subscription::whereStatus(ACTIVE)->whereType(YEARLY)->get();

        return view('frontend.pricing', $data);
    }

    public function businessIndex()
    {
        set_page_meta('Business');

        return view('frontend.business');
    }
}
