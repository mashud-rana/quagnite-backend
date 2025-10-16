<?php

namespace App\Services\Api\V1\Teacher\Course;

use App\Models\Course;
use App\Services\BaseService;
use App\Services\Utils\FileService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CourseCreateService extends BaseService
{
    public function __construct(Course $model, protected FileService $fileService){
        Parent::__construct($model);
    }

    public function courseCreate($data, $tmpDirectory): Course
    {
        $data['user_id'] = Auth::user()->id;
        // upload image and video
        $data['image'] = $data->hasFile('image') ? $this->fileService->upload($data->file('image'), 'course/images') : null;
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

        logger('submit data',[$data]);

//        $course = DB::transaction(function () use ($data) {
//
//            if (isset($data['tag_id'])) {
//                $tags = $data['tag_id'];
//                unset($data['tag_id']);
//            } else {
//                $tags = [];
//            }
//            // store Course data
//            $course = Course::create($data);
//
//            // store course tag
//            foreach ($tags as $tag) {
//
//                $course->tags()->create([
//                    'tag_id' => $tag
//                ]);
//            }
//
//            return $course;
//        }, $retryCount = 5);

//        return $course;
    }
}
