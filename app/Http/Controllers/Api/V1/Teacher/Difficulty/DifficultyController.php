<?php

namespace App\Http\Controllers\Api\V1\Teacher\Difficulty;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\Teacher\CourseDifficulty\CourseDifficultyResource;
use App\Services\Api\V1\DifficultyService;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class DifficultyController extends Controller
{

    use ApiResponse;

    public $difficultyService;

    public function __construct(DifficultyService $difficultyService)
    {
        $this->difficultyService = $difficultyService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = $this->difficultyService->get();
        return $this->success(CourseDifficultyResource::collection($response), 'Difficulty Level List');
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
