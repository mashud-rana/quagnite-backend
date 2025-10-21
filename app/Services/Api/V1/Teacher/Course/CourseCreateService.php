<?php

namespace App\Services\Api\V1\Teacher\Course;

use App\Http\Requests\Api\V1\Teacher\CourseRequest;
use App\Http\Requests\Api\V1\Teacher\CourseUpdateRequest;
use App\Models\Course;
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
                $tags = $tagIds = explode(',', $data['tag_id']);;
                unset($data['tag_id']);
            } else {
                $tags = [];
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
        }

        // if ($request->hasFile('video')) {
        //     $data['video'] = $this->fileService->upload($request->file('video'), 'course/videos');
        // }

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

    public function getTeacherAllCourse()
    {
        $course = $this->model::whereUserId(auth()->user()->id)->withCount('lectures')->withSum('lectures', 'file_duration_second')->get();
        return $course;
    }

    public function getSingleCourse($uuid = null)
    {
        if(!$uuid){
            return null;
        }
        $course = $this->model::whereUserId(auth()->user()->id)->where('uuid', $uuid)->first();
        return $course;
    }
}
