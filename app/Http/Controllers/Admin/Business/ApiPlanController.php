<?php

namespace App\Http\Controllers\Admin\Business;

use App\DataTables\Admin\ApiPlanDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ApiPlanRequest;
use App\Services\Admin\Business\ApiPlanService;

class ApiPlanController extends Controller
{
    protected $apiPlanService;

    public function __construct(ApiPlanService $apiPlanService)
    {
        $this->apiPlanService = $apiPlanService;

        $this->middleware('permission:All Api Plans|Edit Api Plan|Create Api Plan|Delete Api Plan', ['only' => ['index']]);
        $this->middleware('permission:Create Api Plan', ['only' => ['create', 'store']]);
        $this->middleware('permission:Edit Api Plan', ['only' => ['edit', 'update']]);
        $this->middleware('permission:Delete Api Plan', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ApiPlanDataTable $dataTable)
    {
        set_page_meta('Api Plan');

        return $dataTable->render('admin.business.api-plan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        set_page_meta('Create Api Plan');

        return view('admin.business.api-plan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ApiPlanRequest $request)
    {
        $data = $request->validated();

        try {
            $this->apiPlanService->storeOrUpdate($data);
            record_created_flash();
        } catch (\Exception $e) {
            log_error($e);
            something_wrong_flash();
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
            $plan = $this->apiPlanService->get($id);
            set_page_meta('Edit Api Plan');

            return view('admin.business.api-plan.edit', compact('plan'));
        } catch (\Exception $e) {
            log_error($e);
            something_wrong_flash();
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
    public function update(ApiPlanRequest $request, $id)
    {
        $data = $request->validated();

        try {
            $this->apiPlanService->storeOrUpdate($data, $id);
            record_updated_flash();

            return redirect()->route('admin.business.api-plans.index');
        } catch (\Exception $e) {
            log_error($e);
            something_wrong_flash();

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
            $this->apiPlanService->delete($id);
            record_deleted_flash();

            return back();
        } catch (\Exception $e) {
            log_error($e);
            something_wrong_flash();

            return back();
        }
    }
}
