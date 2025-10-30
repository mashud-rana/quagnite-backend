<?php

namespace App\Services\Api\V1\Teacher\Bootcamp;


use App\Http\Requests\Api\V1\Teacher\BootcampStoreRequest;
use App\Http\Requests\Api\V1\Teacher\BootcampStoreUpdateRequest;
use App\Http\Requests\Bootcamp\BootcampLectureDeleteRequest;
use App\Http\Requests\Bootcamp\BootcampUpdateRequest;
use App\Models\Bootcamp;
use App\Models\BootcampLecture;
use App\Services\BaseService;
use App\Services\Utils\FileService;
use App\Services\Utils\ZoomService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class BootcampCreateService extends BaseService
{

    public function __construct(Bootcamp $model, protected FileService $fileService,private ZoomService $zoomService){
        parent::__construct($model);
    }

    public function getTeacherAllBootcamp($with = [])
    {
        $page = request()->get('page', 1);
        $limit = request()->get('limit', 10);
        $bootcamps = $this->model::whereUserId(auth()->user()->id)->paginate($limit, ['*'], 'page', $page);
        return $bootcamps;
    }


    public function storeBootcamp(BootcampStoreRequest $request, $tmpDirectory)
    {
        $data = $request->validated();

        $data['user_id'] = Auth::user()->id;
        // upload image and video
        $data['image'] = $request->hasFile('image') ? $this->fileService->upload($request->file('image'), 'bootcamp/images') : null;
        // $data['video'] = $request->hasFile('video') ? $this->fileService->upload($request->file('video'), 'bootcamp/videos') : null;

        if (isset($data['file']) && $fileName = Cache::get("chunk_uploaded_file_name")) {

            $uploadedFilePath = $tmpDirectory .  $data['file'] . '/' . $fileName;
            $newFileName = $data['file'] . '-' . $fileName;

            $response = $this->chunkFileService->moveUploadedFile($uploadedFilePath, 'bootcamp/videos/' . $newFileName);

            if ($response) {
                $data['video'] = $response;
            } else {
                $data['video'] = null;
            }
        }

        $bootcamp = DB::transaction(function () use ($data) {

            if (isset($data['tag_id'])) {
                $tags = explode(',', $data['tag_id']);;
                unset($data['tag_id']);
            } else {
                $tags = [];
            }

//            set Data format
            if(isset($data['start_date']) && isset($data['end_date']))
            {
                $data['start_date'] = formatDate($data['start_date'], "Y-m-d");
                $data['end_date'] = formatDate($data['end_date'], "Y-m-d");
            }

            // store bootcamp data
            $bootcamp = Bootcamp::create($data);

            // store bootcamp tag
            foreach ($tags as $tag) {

                $bootcamp->tags()->create([
                    'tag_id' => $tag
                ]);
            }

            return $bootcamp;
        }, $retryCount = 5);

        return $bootcamp;
    }

    public function updateBootcamp(BootcampStoreUpdateRequest $request, $tmpDirectory)
    {
        $data = $request->validated();

        $bootcamp = $this->getBootcampById($data['bootcamp_id']);

        // upload image and video
        if ($request->hasFile('image')) {
            $data['image'] = $this->fileService->upload($request->file('image'), 'bootcamp/images');
        }

        // if ($request->hasFile('video')) {
        //     $data['video'] = $this->fileService->upload($request->file('video'), 'bootcamp/videos');
        // }

        if (isset($data['file']) && $fileName = Cache::get("chunk_uploaded_file_name")) {

            $uploadedFilePath = $tmpDirectory .  $data['file'] . '/' . $fileName;
            $newFileName = $data['file'] . '-' . $fileName;

            $response = $this->chunkFileService->moveUploadedFile($uploadedFilePath, 'bootcamp/videos/' . $newFileName);

            if ($response) {
                $data['video'] = $response;

                if ($bootcamp->video) {
                    $this->fileService->delete($bootcamp->video);
                }
            } else {
                $data['video'] = null;
            }
        }

        $bootcamp = DB::transaction(function () use ($data, $bootcamp) {

            // unset and store tags
            if (isset($data['tag_id'])) {
                $tags = explode(',', $data['tag_id']);;
                unset($data['tag_id']);
            } else {
                $tags = [];
            }

//            set Data format
            if(isset($data['start_date']) && isset($data['end_date']))
            {
                $data['start_date'] = formatDate($data['start_date'], "Y-m-d");
                $data['end_date'] = formatDate($data['end_date'], "Y-m-d");
            }
            unset($data['bootcamp_id']);
            // store bootcamp data
            $bootcamp->update($data);

            // Delete previous bootcamp tags
            $bootcamp->tags()->delete();
            // store bootcamp tag
            foreach ($tags as $tag) {
                $bootcamp->tags()->create([
                    'tag_id' => $tag
                ]);
            }

            return $bootcamp;
        }, $retryCount = 5);

        return $bootcamp;
    }

    public function getBootcampById(string $id)
    {
        return Bootcamp::findOrFail($id);
    }


    public function deleteLecture(BootcampLectureDeleteRequest $request)
    {
        $lecture = $this->getLectureById($request->lecture_id);

        $response = $this->zoomService->deleteMeeting($lecture->meeting_id);

        if ($response) {
            $lecture->delete();

            return true;
        } else {
            return false;
        }
    }

    public function getLectureById(string $id)
    {
        return BootcampLecture::findOrFail($id);
    }

}
