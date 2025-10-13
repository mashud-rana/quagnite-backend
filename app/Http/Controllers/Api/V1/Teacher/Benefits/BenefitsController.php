<?php

namespace App\Http\Controllers\Api\V1\Teacher\Benefits;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\Teacher\CourseBenefits\CourseBenefitsResource;
use App\Services\Api\V1\Teacher\Benefits\BenefitsService;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class BenefitsController extends Controller
{
    use ApiResponse;
    public $benefitsService;

    public function __construct(BenefitsService $benefitsService)
    {
         $this->benefitsService = $benefitsService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $benefits = $this->benefitsService->get();
        return $this->success(CourseBenefitsResource::collection($benefits), 'Benefits List');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
