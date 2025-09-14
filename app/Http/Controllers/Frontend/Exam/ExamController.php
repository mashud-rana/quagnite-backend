<?php

namespace App\Http\Controllers\Frontend\Exam;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Services\SubscribeService;

class ExamController extends Controller
{
    public function __construct(protected SubscribeService $subscribeService)
    {
        if (auth()->check()) {
            $this->$subscribeService->user = auth()->user();
        }
    }

    public function index()
    {
        set_page_meta('Exam');

        if (auth()->check()) {
            $data['isSubscriptionAvailable'] = $this->subscribeService->isSubscriptionAvailableForExam(auth()->user());
        } else {
            $data['isSubscriptionAvailable'] = false;
        }

        $data['topExams'] = Exam::inRandomOrder()->paginate(8);
        $data['recentExams'] = Exam::latest()->paginate(8);

        return view('frontend.exam.index', $data);
    }
}
