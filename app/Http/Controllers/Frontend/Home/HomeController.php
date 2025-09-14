<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Models\Course;
use App\Models\Policy;
use App\Models\Review;
use App\Models\Bootcamp;
use App\Models\FaqEntry;
use App\Models\FaqTopic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DemoBook;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class HomeController extends Controller
{
    public function index()
    {
        set_page_meta('Home');
        return view('frontend.home.index');
    }

    public function loadSection($section)
    {
        $data = [];

        // get bootcamp
        $data['recent_bootcamps'] = Bootcamp::approved()->with('user')
            ->latest()
            ->take(4)
            ->get();

        // get course
        $data['recent_courses'] = Course::approved()->with('user')
            ->latest()
            ->take(4)
            ->get();

        // get reviews
        $data['reviews'] = Review::approved()->with('user')
            ->whereIn('rating', [4, 5])->get();

        return view("frontend.home.render.$section", ['data' => $data]);
    }

    public function helpDesk()
    {
        set_page_meta('Help Center');
        $help_topic = FaqTopic::where('status', ACTIVE)->get();
        $faqs = FaqEntry::where('topic_id', ACTIVE)->get();
        return view('frontend.help.index', compact('help_topic', 'faqs'));
    }

    public function helpDetails($slug)
    {
        set_page_meta('Help Details');
        $item = FaqTopic::where('slug', $slug)->get()->firstOrFail();
        $faqs = FaqEntry::where('topic_id', $item->id)->get();
        return view('frontend.help.details', compact('item', 'faqs'));
    }

    public function privacyPolicy()
    {
        set_page_meta('Privacy Policy');

        $data = [];

        try {
            $data['content'] = Policy::where('type', 1)->firstOrFail();
        } catch (ModelNotFoundException $e) {
            log_error($e);
            something_wrong_flash('Privacy Policy not found!');
            return redirect()->route('front.home');
        }

        return view('frontend.pages.privacy-policy', $data);
    }

    public function termsCondition()
    {
        set_page_meta('Terms Conditions');
        $data = [];

        try {
            $data['content'] = Policy::where('type', 2)->firstOrFail();
        } catch (ModelNotFoundException $e) {
            log_error($e);
            something_wrong_flash('Terms Condition not found!');
            return redirect()->route('front.home');
        }

        return view('frontend.pages.terms-condition', $data);
    }

    public function contact()
    {
        set_page_meta('Contact us');
        return view('frontend.pages.contact');
    }

    public function bookYourDemo(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
        ]);

        DemoBook::create([
            'attributes' => [
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'company_name' => $request->company_name,
                'company_size' => $request->company_size,
                'comment' => $request->comment,
                'about_us' => $request->about_us,
            ]
        ]);

        return response()->json(['msg' => 'Your Form is submitted, we will contact you soon!'], 200);
    }
}
