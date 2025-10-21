<?php

namespace App\Http\Controllers\Api\V1\Teacher\Course;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Teacher\CourseRequest;
use App\Http\Requests\Api\V1\Teacher\CourseUpdateRequest;
use App\Http\Resources\Course\CourseResource;
use App\Http\Resources\Api\V1\Teacher\Course\CourseResource as ApiCourseResource;
use App\Models\Course;
use App\Services\Api\V1\Teacher\Course\CourseCreateService;
use App\Services\Utils\ChunkFileService;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

/**
 * @group Courses
 *
 * Managing Courses
 */
class CourseController extends Controller
{
    use ApiResponse;

    public $chunkFileSevice;
    public $courseCreateService;

    public function __construct(ChunkFileService $chunkFileService, CourseCreateService $courseCreateService)
    {
        $this->chunkFileSevice = $chunkFileService;
        $this->courseCreateService = $courseCreateService;
    }

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

    public function courseList()
    {
        $response = $this->courseCreateService->getTeacherAllCourse(['tags','benefits']);
        return $this->success(ApiCourseResource::collection($response), 'Course list fetched successfully');
    }


    public function courseItem($uuid)
    {
        $response = $this->courseCreateService->getSingleCourse($uuid, ['tags','benefits']);
        return $this->success(new ApiCourseResource($response), 'Course item fetched successfully');
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
     public function store(CourseRequest $request)
     {
         $data = $request->validated();
         $response  = $this->courseCreateService->storeCourse($request, $this->tmpDirectory());

         return $this->success($response, 'Course created successfully');
     }

    public function updateCourse(CourseUpdateRequest $request)
    {
        $data = $request->validated();
        $response  = $this->courseCreateService->updateCourse($request, $this->tmpDirectory());

        return $this->success($response, 'Course update successfully');
     }

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


    public function storeChunkFile(Request $request)
    {
        logger('store chunk file 1', [$request]);
        $tmpDir = $this->tmpDirectory();

        return $this->chunkFileSevice->storeFileInServer($request, $tmpDir);
    }

    public function updateChunkFile(Request $request)
    {

        logger('update chunk file 2', [$request]);
        $tmpDir = $this->tmpDirectory();

        if ($this->chunkFileSevice->updateFileInServer($request, $tmpDir)) {
            return response()->json(['uploaded' => true]);
        } else {
            return response()->json(['uploaded' => false], 404);
        }
    }

    public function deleteChunkFile()
    {
        logger('delete chunk file');
        $tmpDir = $this->tmpDirectory();

        $response = $this->chunkFileSevice->deleteFileFromServer($tmpDir);

        if ($response) {

            return response()->json(['deleted' => true]);
        }

        return response()->json(['deleted' => false, 'error' => 'Directory not found'], 404);
    }

    private function tmpDirectory()
    {
        return 'uploads/tmp/' . date('m-d-Y') . '/' . auth()->id() . '/';
    }
}
