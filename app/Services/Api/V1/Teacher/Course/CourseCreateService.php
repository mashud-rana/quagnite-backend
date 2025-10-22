<?php

namespace App\Services\Api\V1\Teacher\Course;

use App\Http\Requests\Api\V1\Teacher\CourseRequest;
use App\Http\Requests\Api\V1\Teacher\CourseUpdateRequest;
use App\Models\Course;
use App\Models\CourseLecture;
use App\Models\CourseLesson;
use App\Services\BaseService;
use App\Services\Utils\ChunkFileService;
use App\Services\Utils\FileService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CourseCreateService extends BaseService
{
    public function __construct(Course $model, protected FileService $fileService, private ChunkFileService $chunkFileService){
        Parent::__construct($model);
    }

    public function storeCourse(CourseRequest $request, $tmpDirectory)
    {
        $data = $request->validated();
        $data['user_id'] = Auth::user()->id;
        // upload image and video
        $data['image'] = $request->hasFile('image') ? $this->fileService->upload($request->file('image'), 'course/images') : null;
        // $data['video'] = $request->hasFile('video') ? $this->fileService->upload($request->file('video'), 'course/videos') : null;
        if (isset($data['video']) && $fileName = session()->get('chunk_uploaded_file_name')) {

            $uploadedFilePath = $tmpDirectory .  $data['video'] . '/' . $fileName;
            $newFileName = $data['video'] . '-' . $fileName;

            $response = $this->chunkFileService->moveUploadedFile($uploadedFilePath, 'course/videos/' . $newFileName);

            if ($response) {
                $data['video'] = $response;
            } else {
                $data['video'] = null;
            }
        }

        $course = DB::transaction(function () use ($data) {

            if (isset($data['tag_id'])) {
                $tags = explode(',', $data['tag_id']);;
                unset($data['tag_id']);
            } else {
                $tags = [];
            }

            if (isset($data['benefits_id'])) {
                $benefits_ids = explode(',', $data['benefits_id']);;
                unset($data['benefits_id']);
            } else {
                $benefits_ids = [];
            }

            if($data['learner_accessibility']  == 'free')
            {
                unset($data['price']);
                unset($data['old_price']);
            }
            // store Course data
            $course = Course::create($data);

            // store course tag
            foreach ($tags as $tag) {
                $course->tags()->create([
                    'tag_id' => $tag
                ]);
            }

            foreach ($benefits_ids as $benefit) {
                $course->benefits()->create([
                    'benefit_id' => $benefit
                ]);
            }

            return $course;
        }, $retryCount = 5);

        return $course;
    }


    public function updateCourse(CourseUpdateRequest $request, $tmpDirectory)
    {
        $data = $request->validated();

        $course = $this->getCourseById($data['course_id']);

        // upload image and video
        if ($request->hasFile('image')) {
            $data['image'] = $this->fileService->upload($request->file('image'), 'course/images');
        }else{
            $data['image'] = $course->image;
        }

        if (isset($data['video']) && $fileName = session()->get('chunk_uploaded_file_name')) {

            $uploadedFilePath = $tmpDirectory .  $data['video'] . '/' . $fileName;
            $newFileName = $data['video'] . '-' . $fileName;

            $response = $this->chunkFileService->moveUploadedFile($uploadedFilePath, 'course/videos/' . $newFileName);

            if ($response) {
                $data['video'] = $response;
                // delete old video
                if ($course->video) {
                    $this->fileService->delete($course->video);
                }
            } else {
                $data['video'] = null;
            }
        }

        $course = DB::transaction(function () use ($data, $course) {

            // unset and store tags
            if (isset($data['tag_id'])) {
                $tags = $tagIds = explode(',', $data['tag_id']);;
                unset($data['tag_id']);
            } else {
                $tags = [];
            }
            // unset course id
            unset($data['course_id']);

            if($data['learner_accessibility']  == 'free')
            {
                unset($data['price']);
                unset($data['old_price']);
            }

            // store Course data
            $course->update($data);

            // Delete previous course tags
            $course->tags()->delete();
            // store course tag
            foreach ($tags as $tag) {
                $course->tags()->create([
                    'tag_id' => $tag
                ]);
            }

            return $course;
        }, $retryCount = 5);

        return $course;
    }

    public function getCourseById(string $id)
    {
        return Course::findOrFail($id);
    }

    public function getTeacherAllCourse($with = [])
    {
        $page = request()->get('page', 1);
        $limit = request()->get('limit', 10);
        $course = $this->model::whereUserId(auth()->user()->id)->withCount('lectures')->withSum('lectures', 'file_duration_second')->with($with)->paginate($limit, ['*'], 'page', $page);
        return $course;
    }

    public function getSingleCourse($uuid = null, $with = [])
    {
        if(!$uuid){
            return null;
        }
        $course = $this->model::whereUserId(auth()->user()->id)->where('uuid', $uuid)->with($with)->first();
        return $course;
    }

    public function deleteCourse($id)
    {
        $course = $this->model::whereId($id)->firstOrFail();

        $lessons = CourseLesson::whereCourseId($course->id)->get();

        foreach ($lessons as $lesson) {

            $lectures = CourseLecture::whereCourseLessonId($lesson->id)->get();

            if (count($lectures) > 0) {

                foreach ($lectures as $lecture) {

                    $request = new CourseLectureDeleteRequest;

                    $request->merge(['lecture_id' => $lecture->id]);

                    $this->courseCreateService->deleteLecture($request);
                }
            }

            $lesson->delete();
        }

        $course->delete();

        record_deleted_flash();

        return back();
    }
}
