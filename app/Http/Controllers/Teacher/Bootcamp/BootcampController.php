<?php

namespace App\Http\Controllers\Teacher\Bootcamp;

use App\Models\Bootcamp;
use Illuminate\Http\Request;
use App\Models\BootcampLesson;
use App\Models\BootcampLecture;
use App\Models\DiscussionComment;
use App\Services\Utils\ZoomService;
use App\Http\Controllers\Controller;
use App\Services\Utils\ChunkFileService;
use App\Services\Bootcamp\BootcampCreateService;
use App\Http\Requests\Bootcamp\BootcampStoreRequest;
use App\Http\Requests\Bootcamp\BootcampUpdateRequest;
use App\Http\Requests\Bootcamp\BootcampStoreLessonRequest;
use App\Http\Requests\Bootcamp\BootcampStoreLectureRequest;
use App\Http\Requests\Bootcamp\BootcampLectureDeleteRequest;
use App\Http\Requests\Bootcamp\BootcampUpdateLectureRequest;

class BootcampController extends Controller
{
    public function __construct(
        private ZoomService $zoomService,
        private BootcampCreateService $bootcampCreateService,
        private ChunkFileService $chunkFileSevice
    ) {
    }

    public function index()
    {
        set_page_meta('Bootcamps');

        $data['bootcamps'] = Bootcamp::whereUserId(auth()->user()->id)->get();

        return view('teacher.bootcamp.index', $data);
    }

    public function create()
    {
        set_page_meta('Bootcamp create');

        $data = $this->bootcampCreateService->getDataForCreateOrUpdateBootcamp();

        return view('teacher.bootcamp.create', $data);
    }

    public function store(BootcampStoreRequest $request)
    {
        $bootcamp = $this->bootcampCreateService->storeBootcamp($request, $this->tmpDirectory());

        return redirect()->route('teacher.bootcamp.edit.content', $bootcamp->uuid);
    }

    public function edit(string $uuid)
    {
        $data = $this->bootcampCreateService->getDataForCreateOrUpdateBootcamp();
        $data['bootcamp'] = $this->bootcampCreateService->getBootcampByUuid($uuid);
        $data['bootcampTags'] = $data['bootcamp']->tags->pluck('tag_id')->toArray();

        set_page_meta('Bootcamp Update');

        return view('teacher.bootcamp.edit', $data);
    }

    public function editContent(string $uuid)
    {
        $data['bootcamp'] = $this->bootcampCreateService->getBootcampByUuid($uuid);

        // get bootcamp and lesson
        $data['bootcampLessons'] = $this->bootcampCreateService->getAllLessonByBootcampId($data['bootcamp']->id);

        return view('teacher.bootcamp.edit-content', $data);
    }

    public function destroy(string $uuid)
    {
        $bootcamp = Bootcamp::whereUuid($uuid)->firstOrFail();

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

        record_deleted_flash();

        return back();
    }

    public function submit(string $uuid)
    {
        $data['bootcamp'] = $this->bootcampCreateService->getBootcampByUuid($uuid);
        set_page_meta('Bootcamp Submit');

        return view('teacher.bootcamp.submit', $data);
    }

    public function update(BootcampUpdateRequest $request)
    {
        $bootcamp = $this->bootcampCreateService->updateBootcamp($request, $this->tmpDirectory());

        return redirect()->route('teacher.bootcamp.edit.content', $bootcamp->uuid);
    }

    public function storeLesson(BootcampStoreLessonRequest $request)
    {
        // store lesson title
        $this->bootcampCreateService->storeBootcampLesson($request);

        $bootcamp = $this->bootcampCreateService->getBootcampById($request->bootcamp_id);

        record_created_flash();

        return redirect()->route('teacher.bootcamp.edit.content', $bootcamp->uuid);
    }

    public function storeLecture(BootcampStoreLectureRequest $request)
    {
        // store lecture
        $response = $this->bootcampCreateService->storeBootcampLecture($request);

        $bootcamp = $this->bootcampCreateService->getBootcampById($request->bootcamp_id);

        if ($response) {
            record_created_flash();
        } else {
            record_deleted_flash('Somethings went wrong! Please try again!');
        }

        return redirect()->route('teacher.bootcamp.edit.content', $bootcamp->uuid);
    }

    public function previewLecture(string $id)
    {
        $lecture = $this->bootcampCreateService->getLectureById($id);

        return view('teacher.bootcamp.render.lecture-preview', [
            'lecture' => $lecture,
        ]);
    }

    public function editLecture(string $id)
    {
        $lecture = $this->bootcampCreateService->getLectureById($id);

        return view('teacher.bootcamp.render.lecture-edit', [
            'lecture' => $lecture,
        ]);
    }

    public function updateLecture(BootcampUpdateLectureRequest $request)
    {
        // store lecture
        $response = $this->bootcampCreateService->updateBootcampLecture($request);

        $bootcamp = $this->bootcampCreateService->getBootcampById($request->bootcamp_id);

        if ($response) {
            record_updated_flash();
        } else {
            record_deleted_flash('Somethings went wrong! Please try again!');
        }

        return redirect()->route('teacher.bootcamp.edit.content', $bootcamp->uuid);
    }

    public function editLessonView(string $bootcamp_id)
    {
        // get course and lesson
        $data['bootcampLessons'] = $this->bootcampCreateService->getAllLessonByBootcampId($bootcamp_id);

        $data['bootcamp'] = $this->bootcampCreateService->getBootcampById($bootcamp_id);

        return view('teacher.bootcamp.edit-content', $data);
    }

    public function deleteLecture(BootcampLectureDeleteRequest $request)
    {
        $this->bootcampCreateService->deleteLecture($request);

        record_deleted_flash();

        return redirect()->back();
    }

    public function editLesson(string $id)
    {
        $lesson = BootcampLesson::find($id);

        return view('teacher.bootcamp.render.lesson-edit', compact('lesson'));
    }

    public function updateLesson(Request $request, string $uuid)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $lesson = BootcampLesson::whereUuid($uuid)->firstOrFail();

        $lesson->update([
            'title' => $request->title,
        ]);

        return back();
    }

    public function deleteLesson(Request $request)
    {
        $lesson = BootcampLesson::whereUuid($request->uuid)->firstOrFail();

        $lectures = BootcampLecture::select('id')->where('bootcamp_lesson_id', $lesson->id)->get();

        if (count($lectures) > 0) {

            foreach ($lectures as $lecture) {

                $request = new BootcampLectureDeleteRequest;

                $request->merge(['lecture_id' => $lecture->id]);

                $this->bootcampCreateService->deleteLecture($request);
            }
        }

        $lesson->delete();

        return back();
    }

    public function show($slug, $uuid)
    {
        set_page_meta('Bootcamp');

        // Bootcamp Data
        $data['bootcamp'] = Bootcamp::whereSlug($slug)->whereUuid($uuid)->with('user')->first();
        $data['bootcampLessons'] = BootcampLesson::whereBootcampId($data['bootcamp']->id)->with('lecture')->withCount('lecture')->get();

        // Reviews

        $data['reviews'] = $data['bootcamp']->reviews()->with('user')->get();

        $data['reviewsCount'] = $data['reviews']->count();

        $data['averageRating'] = round($data['reviews']->avg('rating'), 2);

        // Count 1 - 5 reviews
        $data['ratingsCount'] = $data['reviews']->groupBy('rating')
            ->map(function ($group) {
                return $group->count();
            });

        // Calculate 1 -5 reviews percentage
        $data['percentageRatings'] = [];
        for ($i = 1; $i <= 5; $i++) {
            $percentage = $data['ratingsCount']->has($i) ? ($data['ratingsCount'][$i] / $data['reviewsCount']) * 100 : 0;
            $data['percentageRatings'][$i] = (int) $percentage;
        }

        $data['discussions'] = $data['bootcamp']->discussions()->with(['comments', 'user'])->get();

        return view('teacher.bootcamp.show', $data);
    }

    public function discussionSubmit(Request $request)
    {
        $request->validate([
            'bootcamp_id' => 'required',
            'description' => 'required',
        ]);

        $bootcamp = Bootcamp::findOrFail($request->bootcamp_id);

        $bootcamp->discussions()->create([
            'user_id' => auth()->id(),
            'description' => $request->description,
        ]);

        record_created_flash('Discussion Added Successfully');

        return back();
    }

    public function discussionCommentSubmit(Request $request)
    {
        $request->validate([
            'discussion_id' => 'required',
            'comment' => 'required',
        ]);

        DiscussionComment::create([
            'discussion_id' => $request->discussion_id,
            'user_id' => auth()->id(),
            'comment' => $request->comment,
        ]);

        record_created_flash('Comment Added Successfully');

        return back();
    }

    public function storeChunkFile(Request $request)
    {
        $tmpDir = $this->tmpDirectory();

        return $this->chunkFileSevice->storeFileInServer($request, $tmpDir);
    }

    public function updateChunkFile(Request $request)
    {
        $tmpDir = $this->tmpDirectory();

        if ($this->chunkFileSevice->updateFileInServer($request, $tmpDir)) {
            return response()->json(['uploaded' => true]);
        } else {
            return response()->json(['uploaded' => false], 404);
        }
    }

    public function deleteChunkFile()
    {
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
