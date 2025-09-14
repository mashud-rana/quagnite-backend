<?php

namespace App\Http\Controllers\Student\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use App\Models\Bootcamp;
use App\Models\Course;
use App\Models\EnrollBootcamp;
use App\Models\EnrollCourse;
use App\Models\ForumPost;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        set_page_meta('Dashboard');

        $data = [
            'enroll_courses' => $this->getLatestEnrollmentsWithProgress(),
            'enroll_bootcamps' => $this->getLatestEnrollments(),
            'courses' => $this->getLatestItems(Course::class),
            'bootcamps' => $this->getLatestItems(Bootcamp::class),
        ];

        //
        $data['forum'] = ForumPost::with('user', 'comments')
            ->withCount('comments')
            ->when(auth()->check(), function ($query) {
                $query->where('user_id', auth()->id());
            })
            ->active()
            ->latest()
            ->first();

        return view('student.dashboard', compact('data'));
    }

    private function getLatestEnrollments()
    {
        return EnrollBootcamp::where('user_id', Auth::id())
            ->with('student', 'bootcamp')
            ->latest('created_at')
            ->take(3)
            ->get();
    }

    private function getLatestEnrollmentsWithProgress()
    {
        $enrollments = EnrollCourse::where('user_id', Auth::id())
            ->with('student', 'course', 'course.lectures', 'course.lectures.users')
            ->latest('created_at')
            ->take(3)
            ->get();

        // Calculate progress for each enrolled course
        foreach ($enrollments as $enrollment) {
            // Access the lectures collection directly
            $lectures = $enrollment->course->lectures;

            // Calculate completed lectures count
            $completedLecturesCount = $lectures->flatMap(function ($lecture) use ($enrollment) {
                return $lecture->users->map(function ($user) use ($enrollment, $lecture) {
                    return [
                        'completed' => $user->id === $enrollment->student->id && $user->pivot->completed,
                        'lecture_id' => $lecture->id,
                    ];
                });
            })->where('completed', true)->unique('lecture_id')->count();

            // Total lectures count
            $totalLecturesCount = $lectures->count();

            // Calculate completion percentage
            $completionPercentage = ($totalLecturesCount > 0) ? round(($completedLecturesCount / $totalLecturesCount) * 100) : 0;

            // Assign completion percentage to enrollment object
            $enrollment->completionPercentage = (int) $completionPercentage;
        }

        return $enrollments;
    }

    private function getLatestItems($model)
    {
        return $model::approved()
            ->with(['user', 'category', 'lectures'])
            ->latest('created_at')
            ->take(4)
            ->get();
    }

    public function video()
    {
        // $s3 = new S3Client([
        //     'version' => 'latest',
        //     'region' => env('AWS_DEFAULT_REGION'),
        //     'credentials' => [
        //         'key' => env('AWS_ACCESS_KEY_ID'),
        //         'secret' => env('AWS_SECRET_ACCESS_KEY'),
        //     ],
        // ]);

        // $bucket = env('AWS_BUCKET');
        // $key = 'videos/sample-video.mp4';

        // $cms = $s3->getCommand('GetObject', [
        //     'Bucket' => $bucket,
        //     'Key' => $key,
        // ]);

        // $request = $s3->createPresignedRequest($cms, '+15 minutes');

        // $presignedUrl = (string) $request->getUri();

        // dd($presignedUrl);

        return view('student.video');
    }

    public function getAnnouncements()
    {
        set_page_meta('Announcements');
        $announcements = Announcement::orderBy('id', 'desc')->paginate(5);

        return view('member.announcement.index', compact('announcements'));
    }
}
