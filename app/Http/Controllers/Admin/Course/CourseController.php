<?php

namespace App\Http\Controllers\Admin\Course;

use App\DataTables\Admin\Course\AllCoursesDataTable;
use App\DataTables\Admin\Course\ApproveCoursesDataTable;
use App\DataTables\Admin\Course\HoldCoursesDataTable;
use App\DataTables\Admin\Course\PendingCoursesDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Course\CourseLectureDeleteRequest;
use App\Http\Requests\Course\CourseStoreLectureRequest;
use App\Http\Requests\Course\CourseStoreLessonRequest;
use App\Http\Requests\Course\CourseUpdateLectureRequest;
use App\Http\Requests\Course\CourseUpdateRequest;
use App\Models\Course;
use App\Models\CourseLecture;
use App\Models\CourseLesson;
use App\Services\Course\CourseCreateService;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function __construct(private CourseCreateService $courseCreateService)
    {
        $this->middleware('permission:All Courses|Approve Course|Hold Course|Delete Course', ['only' => ['AllCourses', 'HoldCourses', 'ApproveCourses']]);
        $this->middleware('permission:Approve Course', ['only' => ['statusChange']]);
        $this->middleware('permission:Hold Course', ['only' => ['statusChange']]);
        $this->middleware('permission:Delete Course', ['only' => ['destroy']]);
    }

    public function AllCourses(AllCoursesDataTable $dataTable)
    {
        set_page_meta('All Courses');

        return $dataTable->render('admin.course.all-courses');
    }

    public function HoldCourses(HoldCoursesDataTable $dataTable)
    {
        set_page_meta('Hold Courses');

        return $dataTable->render('admin.course.hold-courses');
    }

    public function ApproveCourses(ApproveCoursesDataTable $dataTable)
    {
        set_page_meta('Approve Courses');

        return $dataTable->render('admin.course.approve-courses');
    }

    public function PendingCourses(PendingCoursesDataTable $dataTable)
    {
        set_page_meta('Pending Courses');

        return $dataTable->render('admin.course.pending-courses');
    }

    public function edit(string $uuid)
    {
        $data = $this->courseCreateService->getDataForCreateOrUpdateCourse();
        $data['course'] = $this->courseCreateService->getCourseByUuid($uuid);
        $data['courseTags'] = $data['course']->tags->pluck('tag_id')->toArray();

        set_page_meta('Course Update');

        return view('admin.course.edit', $data);
    }

    public function update(CourseUpdateRequest $request)
    {
        $course = $this->courseCreateService->updateCourse($request);

        return redirect()->route('admin.course.edit.content', $course->uuid);
    }

    public function submit(string $uuid)
    {
        $data['course'] = $this->courseCreateService->getCourseByUuid($uuid);
        set_page_meta('Course Submit');

        return view('admin.course.submit', $data);
    }

    public function editContent(string $uuid)
    {
        set_page_meta('Course');

        $data['course'] = $this->courseCreateService->getCourseByUuid($uuid);

        // get course and lesson
        $data['courseLessons'] = $this->courseCreateService->getAllLessonByCourseId($data['course']->id);

        return view('admin.course.edit-content', $data);
    }

    public function storeLesson(CourseStoreLessonRequest $request)
    {
        // store lesson title
        $this->courseCreateService->storeCourseLesson($request);

        $course = $this->courseCreateService->getCourseById($request->course_id);

        record_created_flash();

        return redirect()->route('admin.course.edit.content', $course->uuid);
    }

    public function storeLecture(CourseStoreLectureRequest $request)
    {
        // store lecture
        $response = $this->courseCreateService->storeCourseLecture($request);

        $course = $this->courseCreateService->getCourseById($request->course_id);

        if ($response) {
            record_created_flash();
        }

        return redirect()->route('admin.course.edit.content', $course->uuid);
    }

    public function previewLecture(string $id)
    {
        $lecture = $this->courseCreateService->getLectureById($id);

        return view('admin.course.render.lecture-preview', [
            'lecture' => $lecture,
        ]);
    }

    public function editLecture(string $id)
    {
        $lecture = $this->courseCreateService->getLectureById($id);

        return view('admin.course.render.lecture-edit', [
            'lecture' => $lecture,
        ]);
    }

    public function updateLecture(CourseUpdateLectureRequest $request)
    {
        // store lecture
        $this->courseCreateService->updateCourseLecture($request);

        $course = $this->courseCreateService->getCourseById($request->course_id);

        record_updated_flash();

        return redirect()->route('admin.course.edit.content', $course->uuid);
    }

    public function editLessonView(string $course_id)
    {
        // get course and lesson
        $data['courseLessons'] = $this->courseCreateService->getAllLessonByCourseId($course_id);

        $data['course'] = $this->courseCreateService->getCourseById($course_id);

        return view('admin.course.edit-content', $data);
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

        return view('admin.course.render.lesson-edit', compact('lesson'));
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

    public function approved()
    {
        $data['title'] = 'Approved Courses';
        $data['courses'] = Course::where('status', APPROVED)->paginate(25);

        return view('admin.course.approved', $data);
    }

    public function reviewPending()
    {
        $data['title'] = 'Review Pending Courses';
        $data['courses'] = Course::where('status', PENDING)->paginate(25);

        return view('admin.course.review-pending', $data);
    }

    public function statusChange($id, $status)
    {
        $course = Course::findOrFail($id);
        $course->status = $status;
        $course->save();

        record_updated_flash('Course Status Updated Successfully');

        return back();
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

    public function show($slug, $lessonUuid = null, $lectureUuid = null)
    {
        set_page_meta('Course Content');
        // dd($slug);
        // Course Data
        $data['course'] = Course::where('slug', $slug)->firstOrFail();
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

        return view('admin.course.show', $data);
    }
}
