<?php

namespace App\Http\Controllers\Api\V1\Teacher\Bootcamp;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Teacher\BootcampStoreRequest;
use App\Http\Requests\Api\V1\Teacher\BootcampStoreUpdateRequest;
use App\Http\Requests\Bootcamp\BootcampLectureDeleteRequest;
use App\Http\Requests\Course\CourseLectureDeleteRequest;
use App\Http\Resources\Api\V1\Teacher\Bootcamp\BootcampResource;
use App\Http\Resources\Api\V1\Teacher\Course\CourseResource as ApiCourseResource;
use App\Models\Bootcamp;
use App\Models\BootcampCategory;
use App\Models\BootcampLecture;
use App\Models\BootcampLesson;
use App\Models\Course;
use App\Models\CourseLecture;
use App\Models\CourseLesson;
use App\Services\Api\V1\Teacher\Bootcamp\BootcampCreateService;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class BootcampController extends Controller
{
    use ApiResponse;

    public function __construct(private BootcampCreateService $bootcampCreateService){
    }

    public function bootcampList(Request $request)
    {
        $response = $this->bootcampCreateService->getTeacherAllBootcamp();
        return $this->success(BootcampResource::collection($response), 'Bootcamp list fetched successfully');
    }
    public function bootcampCategoryList()
    {
        $bootcampCategories = BootcampCategory::active()->get();

        return $this->success($bootcampCategories, 'Bootcamp Categories Fetched Successfully');
    }

    public function store(BootcampStoreRequest $request)
    {
        $response = $this->bootcampCreateService->storeBootcamp($request, $this->tmpDirectory());
        return $this->success(new BootcampResource($response), 'Bootcamp Created Successfully');
    }

    public function updateCourse(BootcampStoreUpdateRequest $request)
    {
        $response = $this->bootcampCreateService->updateBootcamp($request, $this->tmpDirectory());
        return $this->success(new BootcampResource($response), 'Bootcamp Update Successfully');
    }

    public function destroy($id)
    {

        $bootcamp = Bootcamp::whereId($id)->firstOrFail();

        $lessons = BootcampLesson::whereBootcampId($bootcamp->id)->get();

        if (count($lessons)) {

            foreach ($lessons as $lesson) {

                $lectures = BootcampLecture::whereBootcampLessonId($lesson->id)->get();

                if (count($lectures) > 0) {

                    foreach ($lectures as $lecture) {

                        $request = new BootcampLectureDeleteRequest;

                        $request->merge(['lecture_id' => $lecture->id]);

                        $this->bootcampCreateService->deleteLecture($request);
                    }
                }

                $lesson->delete();
            }
        }
        $bootcamp->delete();

        return $this->success(null, 'Bootcamp Deleted Successfully');
    }


    private function tmpDirectory()
    {
        return 'uploads/tmp/' . date('m-d-Y') . '/' . auth()->id() . '/';
    }
}
