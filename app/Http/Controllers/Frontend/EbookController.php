<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Ebook;
use App\Models\EnrollEbook;
use App\Models\ReserveEbook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EbookController extends Controller
{
    private function hasActiveSubscription()
    {
        $user = auth()->user();

        if ($user) {
            $activeSubscription = $user->subscribes
                ->where('status', ACTIVE)
                ->whereNotNull('subscription_id')
                ->first();

            if ($activeSubscription) {
                $subscription = $activeSubscription->subscription;

                if ($subscription) {
                    $unlimitedEbooks = $subscription->unlimited_ebook;

                    if ($unlimitedEbooks) {
                        return true;
                    }

                    $enrolledEbooksCount = EnrollEbook::where('user_id', $user->id)
                        ->where('subscription_list_id', $activeSubscription->id)
                        ->count();

                    return $subscription->ebook_limit > $enrolledEbooksCount;
                }
            }
        }

        return false;
    }

    public function index()
    {
        set_page_meta('Ebooks');

        $data['ebooks'] = Ebook::published()->with('category')->orderByDesc('id')->paginate(6);
        $data['upcomingEbooks'] = Ebook::upcoming()->with('category')->orderByDesc('id')->paginate(3);
        $data['randomEbooks'] = Ebook::with('category')
            ->inRandomOrder()
            ->take(2)
            ->get();

        $data['has_activeSubscription'] = $this->hasActiveSubscription();

        return view('frontend.ebook.index', $data);
    }

    public function show($slug)
    {
        $data['ebook'] = Ebook::where('slug', $slug)->firstOrFail();
        $data['has_activeSubscription'] = $this->hasActiveSubscription();

        return view('frontend.ebook.show', $data);
    }

    public function searchEbook($query)
    {
        $ebooks = [];

        if ($query) {
            $ebooks = Ebook::search($query)->where('status', PUBLISHED)->orderBy('id', 'desc')->paginate(6);
        } else {
            $ebooks = Ebook::published()->with('category')->orderByDesc('id')->paginate(6);
        }

        return view('frontend.ebook.render.ebooks', compact('ebooks'))->with('has_activeSubscription', $this->hasActiveSubscription());
    }

    public function sortByCategory($id)
    {
        if ($id !== 'all') {
            $data['ebooks'] = Ebook::published()->where('ebook_category_id', $id)->with('category')->orderByDesc('id')->paginate(8);
        } else {
            $data['ebooks'] = Ebook::published()->with('category')->orderByDesc('id')->paginate(8);
        }

        $data['has_activeSubscription'] = $this->hasActiveSubscription();

        return view('frontend.ebook.render.ebooks')->with($data);
    }

    public function reserveEbook()
    {
        if (!Auth::check()) {
            return redirect()->route('auth.login');
        }

        $ebooks = Ebook::upcoming()->select('id', 'title', 'author_name')->get();

        return view('frontend.ebook.reserve-ebook', compact('ebooks'));
    }

    public function reserveEbookStore(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'nullable|string',
            'ebook_id' => 'required',
            'message' => 'nullable|string',
        ]);

        ReserveEbook::create($data);

        record_created_flash('We got your ebook reserve request!');

        return redirect()->back();
    }
}
