<?php

namespace App\Http\Controllers\Api\V1\Course;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Course\CourseResource;

/**
 * @group Courses
 *
 * Managing Courses
 */
class CourseController extends Controller
{
    /**
     * Get All Courses
     *
     * List all the Courses
     *
     * @queryParam per_page optional The number of items per page. Defaults to 10.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $perPage = $request->input('per_page') ?? 10;

        $courses = Course::approved()->with('user')->paginate($perPage)->appends(
            [
                'per_page' => $perPage
            ]
        );

        return CourseResource::collection($courses);
    }

    // /**
    //  * Store Course
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
     * Get A Course
     *
     * Display the specified resource.
     *
     * @urlParam id integer required The ID of the course.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::approved()->with('lessons.lecture', 'user')->find($id);

        if (!$course) {
            return response()->json(['error' => 'Not found'], 404);
        }

        return CourseResource::make($course);
    }

    // /**
    //  * Update Course
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
    //  * Delete Course
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
