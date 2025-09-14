<?php

namespace App\Http\Controllers\Admin\Subscription;

use App\DataTables\Admin\SubscriptionDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SubscriptionRequest;
use App\Services\Subscription\SubscriptionService;

class SubscriptionController extends Controller
{
    protected $subscriptionService;

    public function __construct(SubscriptionService $subscriptionService)
    {
        $this->subscriptionService = $subscriptionService;

        $this->middleware('permission:All Subscriptions|Edit Subscription|Create Subscription|Delete Subscription', ['only' => ['index']]);
        $this->middleware('permission:Create Subscription', ['only' => ['create', 'store']]);
        $this->middleware('permission:Edit Subscription', ['only' => ['edit', 'update']]);
        $this->middleware('permission:Delete Subscription', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(SubscriptionDataTable $dataTable)
    {
        set_page_meta('Subscription');

        return $dataTable->render('admin.subscriptions.subscription.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        set_page_meta('Create Subscription');

        return view('admin.subscriptions.subscription.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubscriptionRequest $request)
    {

        $data = $request->validated();

        $data['unlimited_ebook'] = isset($data['unlimited_ebook']) ? true : false;
        $data['unlimited_exam'] = isset($data['unlimited_exam']) ? true : false;
        $data['unlimited_playground'] = isset($data['unlimited_playground']) ? true : false;

        $data['ebook_limit'] = $data['unlimited_ebook'] ? 0 : $data['ebook_limit'];
        $data['exam_limit'] = $data['unlimited_exam'] ? 0 : $data['exam_limit'];
        $data['playground_limit'] = $data['unlimited_playground'] ? 0 : $data['playground_limit'];

        try {
            $this->subscriptionService->storeOrUpdate($data);
            record_created_flash();
        } catch (\Exception $e) {
            log_error($e);
        }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $subscription = $this->subscriptionService->get($id);
            set_page_meta('Edit Subscription');

            return view('admin.subscriptions.subscription.edit', compact('subscription'));
        } catch (\Exception $e) {
            log_error($e);
        }

        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SubscriptionRequest $request, $id)
    {
        $data = $request->validated();

        $data['unlimited_ebook'] = isset($data['unlimited_ebook']) ? true : false;
        $data['unlimited_exam'] = isset($data['unlimited_exam']) ? true : false;
        $data['unlimited_playground'] = isset($data['unlimited_playground']) ? true : false;

        $data['ebook_limit'] = $data['unlimited_ebook'] ? 0 : $data['ebook_limit'];
        $data['exam_limit'] = $data['unlimited_exam'] ? 0 : $data['exam_limit'];
        $data['playground_limit'] = $data['unlimited_playground'] ? 0 : $data['playground_limit'];

        try {
            $this->subscriptionService->storeOrUpdate($data, $id);
            record_updated_flash();

            return redirect()->route('admin.subscriptions.index');
        } catch (\Exception $e) {
            log_error($e);

            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $this->subscriptionService->delete($id);
            record_deleted_flash();

            return back();
        } catch (\Exception $e) {
            log_error($e);

            return back();
        }
    }
}
