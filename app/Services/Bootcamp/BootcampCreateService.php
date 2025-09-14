<?php

namespace App\Services\Bootcamp;

use DateTime;
use App\Models\Tag;
use App\Models\Bootcamp;
use App\Models\BootcampTag;
use Illuminate\Support\Str;
use App\Models\BootcampLesson;
use App\Models\CourseLanguage;
use App\Models\BootcampLecture;
use App\Models\DifficultyLevel;
use App\Models\BootcampCategory;
use Illuminate\Support\Facades\DB;
use App\Services\Utils\FileService;
use App\Services\Utils\ZoomService;
use Illuminate\Support\Facades\Auth;
use App\Services\Utils\ChunkFileService;
use App\Http\Requests\Bootcamp\BootcampStoreRequest;
use App\Http\Requests\Bootcamp\BootcampUpdateRequest;
use App\Http\Requests\Bootcamp\BootcampStoreLessonRequest;
use App\Http\Requests\Bootcamp\BootcampStoreLectureRequest;
use App\Http\Requests\Bootcamp\BootcampLectureDeleteRequest;
use App\Http\Requests\Bootcamp\BootcampUpdateLectureRequest;

class BootcampCreateService
{
    public function __construct(
        protected FileService $fileService,
        private ZoomService $zoomService,
        private ChunkFileService $chunkFileService
    ) {
    }

    public function getDataForCreateOrUpdateBootcamp(): array
    {
        $data['bootcampLanguages'] = CourseLanguage::select('id', 'title')->get();
        $data['difficultyLevels'] = DifficultyLevel::select('id', 'title')->get();
        $data['bootcampCategories'] = BootcampCategory::select('id', 'name')->get();
        $data['tags'] = Tag::select('id', 'name')->get();

        return $data;
    }

    public function getBootcampById(string $id)
    {
        return Bootcamp::findOrFail($id);
    }

    public function getLectureById(string $id)
    {
        return BootcampLecture::findOrFail($id);
    }

    public function getBootcampByUuid(string $uuid)
    {
        return Bootcamp::whereUuid($uuid)->firstOrFail();
    }

    public function getAllLessonByBootcampId(string $bootcamp_id)
    {
        return BootcampLesson::whereBootcampId($bootcamp_id)->with('lecture')->withCount('lecture')->get();
    }

    public function storeBootcamp(BootcampStoreRequest $request, $tmpDirectory)
    {
        $data = $request->validated();

        $data['user_id'] = Auth::user()->id;
        // upload image and video
        $data['image'] = $request->hasFile('image') ? $this->fileService->upload($request->file('image'), 'bootcamp/images') : null;
        // $data['video'] = $request->hasFile('video') ? $this->fileService->upload($request->file('video'), 'bootcamp/videos') : null;

        if (isset($data['video']) && $fileName = session()->get('chunk_uploaded_file_name')) {

            $uploadedFilePath = $tmpDirectory .  $data['video'] . '/' . $fileName;
            $newFileName = $data['video'] . '-' . $fileName;

            $response = $this->chunkFileService->moveUploadedFile($uploadedFilePath, 'bootcamp/videos/' . $newFileName);

            if ($response) {
                $data['video'] = $response;
            } else {
                $data['video'] = null;
            }
        }

        $bootcamp = DB::transaction(function () use ($data) {

            if (isset($data['tag_id'])) {
                $tags = $data['tag_id'];
                unset($data['tag_id']);
            } else {
                $tags = [];
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

    public function updateBootcamp(BootcampUpdateRequest $request, $tmpDirectory)
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

        if (isset($data['video']) && $fileName = session()->get('chunk_uploaded_file_name')) {

            $uploadedFilePath = $tmpDirectory .  $data['video'] . '/' . $fileName;
            $newFileName = $data['video'] . '-' . $fileName;

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
                $tags = $data['tag_id'];
                unset($data['tag_id']);
            } else {
                $tags = [];
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

    public function storeBootcampLesson(BootcampStoreLessonRequest $request)
    {
        $data = $request->validated();

        $bootcampLesson = BootcampLesson::create($data);

        return $bootcampLesson;
    }

    public function storeBootcampLecture(BootcampStoreLectureRequest $request)
    {
        $data = $request->validated();

        $meetings = $this->createMeeting($data);

        // Define the regex pattern to match the meeting ID
        $pattern = '/\/j\/(\d+)/';

        // Perform the regex match
        preg_match($pattern, $meetings['data']['join_url'], $matches);

        // Extract the meeting ID from the matched result
        $meetingId = isset($matches[1]) ? $matches[1] : null;

        if ($meetings['status']) {
            $data['meeting_id'] = $meetingId;
            // $data['meeting_id'] = $meetings['data']['id'];
            $data['join_url'] = $meetings['data']['join_url'];
            $data['start_url'] = $meetings['data']['start_url'];
            $data['password'] = $meetings['data']['password'];

            // store course bootcamp
            $bootcampLecture = BootcampLecture::create($data);

            return $bootcampLecture;
        } else {
            return false;
        }
    }

    public function updateBootcampLecture(BootcampUpdateLectureRequest $request)
    {
        $data = $request->validated();
        $bootcampLecture = BootcampLecture::findorFail($data['lecture_id']);

        $meetings = $this->updateMeeting($bootcampLecture->meeting_id, $data);

        if ($meetings['status']) {

            // Update course lesson
            $bootcampLecture->update($data);

            return $bootcampLecture;
        } else {
            return false;
        }
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

    public function createMeeting($data)
    {

        $dateTime = new DateTime($data['start_time']);
        $startTime = $dateTime->format('Y-m-d\TH:i:s\Z');

        $meetings = $this->zoomService->createMeeting([
            // "agenda" => 'your agenda',
            'topic' => $data['title'],
            'type' => 2, // 1 => instant, 2 => scheduled, 3 => recurring with no fixed time, 8 => recurring with fixed time
            'duration' => $data['duration'] ?? 40, // in minutes
            'timezone' => config('app.timezone'), // set your timezone
            'password' => Str::random(8),
            'start_time' => $startTime, // set your start time
            //"template_id" => 'set your template id', // set your template id  Ex: "Dv4YdINdTk+Z5RToadh5ug==" from https://marketplace.zoom.us/docs/api-reference/zoom-api/meetings/meetingtemplates
            // "pre_schedule" => false,  // set true if you want to create a pre-scheduled meeting
            // "schedule_for" => 'teacher@app.com', // set your schedule for
            'settings' => [
                'join_before_host' => false, // if you want to join before host set true otherwise set false
                'host_video' => false, // if you want to start video when host join set true otherwise set false
                'participant_video' => false, // if you want to start video when participants join set true otherwise set false
                'mute_upon_entry' => true, // if you want to mute participants when they join the meeting set true otherwise set false
                'waiting_room' => false, // if you want to use waiting room for participants set true otherwise set false
                'audio' => 'both', // values are 'both', 'telephony', 'voip'. default is both.
                'auto_recording' => 'none', // values are 'none', 'local', 'cloud'. default is none.
                'approval_type' => 0, // 0 => Automatically Approve, 1 => Manually Approve, 2 => No Registration Required
            ],

        ]);

        return $meetings;
    }

    public function updateMeeting($meetingsId, $data)
    {
        $dateTime = new DateTime($data['start_time']);
        $startTime = $dateTime->format('Y-m-d\TH:i:s\Z');

        $meetings = $this->zoomService->updateMeeting($meetingsId, [
            'topic' => $data['title'],
            'duration' => $data['duration'] ?? 40, // in minutes
            'start_time' => $startTime, // set your start time
            'settings' => [
                'join_before_host' => false, // if you want to join before host set true otherwise set false
                'host_video' => false, // if you want to start video when host join set true otherwise set false
                'participant_video' => false, // if you want to start video when participants join set true otherwise set false
                'mute_upon_entry' => true, // if you want to mute participants when they join the meeting set true otherwise set false
                'waiting_room' => false, // if you want to use waiting room for participants set true otherwise set false
                'audio' => 'both', // values are 'both', 'telephony', 'voip'. default is both.
                'auto_recording' => 'none', // values are 'none', 'local', 'cloud'. default is none.
                'approval_type' => 0, // 0 => Automatically Approve, 1 => Manually Approve, 2 => No Registration Required
            ],

        ]);

        return $meetings;
    }
}
