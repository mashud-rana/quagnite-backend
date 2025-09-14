<?php

namespace App\Http\Controllers\Api\V1\Exam;

use App\Models\Exam;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Exam\ExamResource;

/**
 * @group Exams
 *
 * Managing Exams
 */
class ExamController extends Controller
{
    /**
     * Get All Exams
     *
     * List all the Exams
     *
     * @queryParam per_page optional The number of items per page. Defaults to 10.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $perPage = $request->input('per_page') ?? 10;

        $exams = Exam::active()->paginate($perPage)->appends(
            [
                'per_page' => $perPage
            ]
        );

        return ExamResource::collection($exams);
    }

    // /**
    //  * Store Exam
    //  *
    //  *
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Get A Exam
     *
     * Display the specified resource.
     *
     * @urlParam id integer required The ID of the Exam.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $exams = Exam::active()->with('questions.options')->find($id);

        if (!$exams) {
            return response()->json(['error' => 'Not found'], 404);
        }

        return ExamResource::make($exams);
    }

    // /**
    //  * Update Exam
    //  *
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // /**
    //  * Delete Exam
    //  *
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }
}
