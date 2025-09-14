<?php

namespace App\Http\Controllers\Member\Subscription;

use App\Models\Subscription;
use App\Http\Controllers\Controller;
use App\Services\Subscription\SubscriptionListService;

class SubscriptionListController extends Controller
{
    protected $subscriptionListService;

    public function __construct(SubscriptionListService $subscriptionListService)
    {
        $this->subscriptionListService = $subscriptionListService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        set_page_meta('Subscriptions');
        $subscriptions = Subscription::whereStatus(ACTIVE)->get();
        return view('member.subscription.index', compact('subscriptions'));
    }
}
