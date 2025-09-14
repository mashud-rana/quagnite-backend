<?php

namespace App\Http\Controllers\Teacher\Course;

use App\Models\Course;
use App\Models\CourseLesson;
use Illuminate\Http\Request;
use App\Models\CourseLecture;
use App\Models\DiscussionComment;
use App\Http\Controllers\Controller;
use App\Services\Utils\ChunkFileService;
use App\Services\Course\CourseCreateService;
use App\Http\Requests\Course\CourseStoreRequest;
use App\Http\Requests\Course\CourseUpdateRequest;
use App\Http\Requests\Course\CourseStoreLessonRequest;
use App\Http\Requests\Course\CourseStoreLectureRequest;
use App\Http\Requests\Course\CourseLectureDeleteRequest;
use App\Http\Requests\Course\CourseUpdateLectureRequest;

class CourseController extends Controller
{
    public function __construct(
        private CourseCreateService $courseCreateService,
        private ChunkFileService $chunkFileSevice
    ) {
    }

    public function index()
    {
        set_page_meta('Course');

        $data['courses'] = Course::whereUserId(auth()->user()->id)->withCount('lectures')->withSum('lectures', 'file_duration_second')->get();

        return view('teacher.course.index', $data);
    }

    public function create()
    {
        $data = $this->courseCreateService->getDataForCreateOrUpdateCourse();

        set_page_meta('Course Create');

        return view('teacher.course.create', $data);
    }

    public function edit(string $uuid)
    {
        $data = $this->courseCreateService->getDataForCreateOrUpdateCourse();
        $data['course'] = $this->courseCreateService->getCourseByUuid($uuid);
        $data['courseTags'] = $data['course']->tags->pluck('tag_id')->toArray();

        set_page_meta('Course Update');

        return view('teacher.course.edit', $data);
    }

    public function delete(string $uuid)
    {
        $course = Course::whereUuid($uuid)->firstOrFail();

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

    public function submit(string $uuid)
    {
        $data['course'] = $this->courseCreateService->getCourseByUuid($uuid);
        set_page_meta('Course Submit');

        return view('teacher.course.submit', $data);
    }

    public function store(CourseStoreRequest $request)
    {
        $course = $this->courseCreateService->storeCourse($request, $this->tmpDirectory());

        return redirect()->route('teacher.course.edit.content', $course->uuid);
    }

    public function update(CourseUpdateRequest $request)
    {
        $course = $this->courseCreateService->updateCourse($request, $this->tmpDirectory());

        return redirect()->route('teacher.course.edit.content', $course->uuid);
    }

    public function editContent(string $uuid)
    {
        set_page_meta('Course');

        $data['course'] = $this->courseCreateService->getCourseByUuid($uuid);

        // get course and lesson
        $data['courseLessons'] = $this->courseCreateService->getAllLessonByCourseId($data['course']->id);

        return view('teacher.course.edit-content', $data);
    }

    public function storeLesson(CourseStoreLessonRequest $request)
    {
        // store lesson title
        $this->courseCreateService->storeCourseLesson($request);

        $course = $this->courseCreateService->getCourseById($request->course_id);

        record_created_flash();

        return redirect()->route('teacher.course.edit.content', $course->uuid);
    }

    public function storeLecture(CourseStoreLectureRequest $request)
    {
        // store lecture
        $response = $this->courseCreateService->storeCourseLecture($request, $this->tmpDirectory());

        $course = $this->courseCreateService->getCourseById($request->course_id);

        if ($response) {
            record_created_flash();
        }

        return redirect()->route('teacher.course.edit.content', $course->uuid);
    }

    public function previewLecture(string $id)
    {
        $data['lecture'] = $this->courseCreateService->getLectureById($id);

        //Check vimeo video is available
        if ($data['lecture']->lecture_format === LECTURE_FORMAT_VIMEO) {

            $data['isVimeoUploaded'] = $this->courseCreateService->isVimeoUploaded($data['lecture']->vimeo_path);
        }

        return view('teacher.course.render.lecture-preview', $data);
    }

    public function editLecture(string $id)
    {
        $lecture = $this->courseCreateService->getLectureById($id);

        return view('teacher.course.render.lecture-edit', [
            'lecture' => $lecture,
        ]);
    }

    public function updateLecture(CourseUpdateLectureRequest $request)
    {
        // store lecture
        $response = $this->courseCreateService->updateCourseLecture($request, $this->tmpDirectory());

        $course = $this->courseCreateService->getCourseById($request->course_id);

        if ($response) {
            record_updated_flash();
        }

        return redirect()->route('teacher.course.edit.content', $course->uuid);
    }

    public function editLessonView(string $course_id)
    {
        // get course and lesson
        $data['courseLessons'] = $this->courseCreateService->getAllLessonByCourseId($course_id);

        $data['course'] = $this->courseCreateService->getCourseById($course_id);

        return view('teacher.course.edit-content', $data);
    }

    public function deleteLecture(CourseLectureDeleteRequest $request)
    {
        $this->courseCreateService->deleteLecture($request);

        record_deleted_flash();

        return redirect()->back();
    }

    public function editLesson(string $id)
    {
        $lesson = CourseLesson::find($id);

        return view('teacher.course.render.lesson-edit', compact('lesson'));
    }

    public function updateLesson(Request $request, string $uuid)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $lesson = CourseLesson::whereUuid($uuid)->firstOrFail();

        $lesson->update([
            'title' => $request->title,
        ]);

        return back();
    }

    public function deleteLesson(Request $request)
    {
        $lesson = CourseLesson::whereUuid($request->uuid)->firstOrFail();

        $lectures = CourseLecture::select('id')->where('course_lesson_id', $lesson->id)->get();

        if (count($lectures) > 0) {

            foreach ($lectures as $lecture) {

                $request = new CourseLectureDeleteRequest;

                $request->merge(['lecture_id' => $lecture->id]);

                $this->courseCreateService->deleteLecture($request);
            }
        }

        $lesson->delete();

        return back();
    }

    public function show($slug, $lessonUuid = null, $lectureUuid = null)
    {
        set_page_meta('Course Content');

        // Course Data
        $data['course'] = Course::where('slug', $slug)->where('user_id', auth()->id())->firstOrFail();
        $data['courseLessons'] = CourseLesson::whereCourseId($data['course']->id)
            ->with(['lecture.users', 'questions'])
            ->withCount('lecture')
            ->withCount('questions')
            ->withSum('lecture', 'file_duration_second')
            ->get();

        // Active Lecture
        if ($lectureUuid) {
            if ($lectureUuid == 'quiz') {
                $data['quizes'] = json_encode($this->getQuizByLesson($lessonUuid));
                $data['activeQuiz'] = true;
                $data['activeLecture'] = true;
            } else {
                $data['activeLecture'] = CourseLecture::where('uuid', $lectureUuid)->firstOrFail();
                $data['activeQuiz'] = false;
            }
        } else {
            $data['activeLecture'] = false;
            $data['activeQuiz'] = false;
        }

        // Reviews
        $data['is_reviewed'] = $data['course']->reviews()->where('user_id', auth()->id())->exists();

        $data['reviews'] = $data['course']->reviews()->with('user')->get();

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

        $data['discussions'] = $data['course']->discussions()->with(['comments', 'user'])->get();

        return view('teacher.course.show', $data);
    }

    public function discussionSubmit(Request $request)
    {
        $request->validate([
            'course_id' => 'required',
            'description' => 'required',
        ]);

        $course = Course::findOrFail($request->course_id);

        $course->discussions()->create([
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

    // get quiz by lesson
    public function getQuizByLesson($lessonUuid)
    {
        $questions = CourseLesson::where('uuid', $lessonUuid)->firstOrFail()->questions()->get();

        $responses = [];

        if (count($questions) > 0) {

            foreach ($questions as $key => $qus) {
                $responses[$key]['question'] = $qus->title;
                $responses[$key]['correctAnswer'] = $qus->answer;
                $responses[$key]['hint'] = $qus->hint;
                $responses[$key]['explanation'] = $qus->explanation;

                foreach ($qus->options as $opt) {
                    if (is_null($opt->title)) {
                        continue;
                    }
                    $responses[$key]['answers'][$opt->option] = $opt->title;
                }
            }
        }

        return $responses;
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
