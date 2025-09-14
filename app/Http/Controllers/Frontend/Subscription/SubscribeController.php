<?php

namespace App\Http\Controllers\Frontend\Subscription;

use App\Http\Controllers\Controller;
use App\Jobs\SendEmailQueueJob;
use App\Mail\ExamEnrollmentConfirmation;
use App\Models\Bootcamp;
use App\Models\Course;
use App\Models\Ebook;
use App\Models\EnrollEbook;
use App\Models\EnrollExam;
use App\Models\EnrollPlayground;
use App\Models\Exam;
use App\Models\Playground;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscribeController extends Controller
{
    public function subscribe(Request $request)
    {
        if (! Auth::check()) {
            $response = $this->responseArray('You need to login first!', 401);

            return response()->json($response);
        }

        $user = auth()->user();
        $userType = $user->user_type;

        if ($userType != USER_TYPE_STUDENT && $userType != USER_TYPE_MEMBER) {
            $response = $this->responseArray('You are not eligible to subscribe to this item!', 401);

            return response()->json($response);
        }

        // Check if the user has an active subscription
        $activeSubscription = $user->subscribes->where('status', ACTIVE)->first();

        if (! $activeSubscription) {
            $response = $this->responseArray('You do not have an active subscription!', 401);

            return response()->json($response);
        }

        // Playground Item
        if ($request->has('playground_id')) {
            // Check if the user has already enrolled
            $enrolledPlayground = EnrollPlayground::where('user_id', $user->id)
                ->where('subscription_list_id', $activeSubscription->id)
                ->where('playground_id', $request->playground_id)
                ->first();

            if ($enrolledPlayground) {
                $response = $this->responseArray('You have already subscribed in this playground!', 401);

                return response()->json($response);
            }
            // Check if playground is available
            $playground = Playground::where('id', $request->playground_id)
                ->where('status', ACTIVE)
                ->first();

            if (! $playground) {
                $response = $this->responseArray('This Playground is not available or not active!', 404);

                return response()->json($response);
            }

            // Check the subscription's playground_limit
            $subscriptionPlaygroundLimit = $activeSubscription->subscription->playground_limit;
            $unlimitedPlayground = $activeSubscription->subscription->unlimited_playground;

            $enrolledPlaygroundsCount = EnrollPlayground::where('user_id', $user->id)
                ->where('subscription_list_id', $activeSubscription->id)
                ->count();

            if ($unlimitedPlayground || $enrolledPlaygroundsCount < $subscriptionPlaygroundLimit) {

                EnrollPlayground::create([
                    'user_id' => $user->id,
                    'playground_id' => $request->playground_id,
                    'subscription_list_id' => $activeSubscription->id,
                    'status' => ACTIVE,
                ]);

                // Redirect to the dashboard
                return response()->json([
                    'status' => 200,
                    'url' => route('student.playground'),
                    'msg' => 'Subscribe Successfully',
                ]);
            }

            $response = $this->responseArray('You have reached the maximum allowed playgrounds for your subscription!', 401);

            return response()->json($response);
        }

        // Ebook Item
        if ($request->has('ebook_id')) {
            // Check if the user has already enrolled
            $enrolledEbook = EnrollEbook::where('user_id', $user->id)
                ->where('subscription_list_id', $activeSubscription->id)
                ->where('ebook_id', $request->ebook_id)
                ->first();

            if ($enrolledEbook) {
                $response = $this->responseArray('You have already subscribed to this ebook!', 401);

                return response()->json($response);
            }

            // Check Ebook exists and is active
            $ebook = Ebook::where('id', $request->ebook_id)
                ->where('status', PUBLISHED)
                ->first();

            if (! $ebook) {
                $response = $this->responseArray('This Ebook is not available or not active!', 404);

                return response()->json($response);
            }

            // Check the subscription's ebook_limit
            $subscriptionEbookLimit = $activeSubscription->subscription->ebook_limit;
            $unlimitedEbook = $activeSubscription->subscription->unlimited_ebook;

            $enrolledEbooksCount = EnrollEbook::where('user_id', $user->id)
                ->where('subscription_list_id', $activeSubscription->id)
                ->count();

            if ($unlimitedEbook || $enrolledEbooksCount < $subscriptionEbookLimit) {

                EnrollEbook::create([
                    'user_id' => $user->id,
                    'ebook_id' => $request->ebook_id,
                    'subscription_list_id' => $activeSubscription->id,
                    'status' => ACTIVE,
                ]);

                // Redirect to the dashboard
                return response()->json([
                    'status' => 200,
                    'url' => route('student.ebooks'),
                    'msg' => 'Subscribe Successfully',
                ]);
            }

            $response = $this->responseArray('You have reached the maximum allowed ebooks for your subscription!', 401);

            return response()->json($response);
        }

        // Exam Item
        if ($request->has('exam_id')) {
            // Check if the user has already enrolled
            $enrolledExam = EnrollExam::where('user_id', $user->id)
                ->where('subscription_list_id', $activeSubscription->id)
                ->where('exam_id', $request->exam_id)
                ->first();

            if ($enrolledExam) {
                $response = $this->responseArray('You have already subscribed to this exam!', 401);

                return response()->json($response);
            }

            // Check Exam exists and is active
            $exam = Exam::where('id', $request->exam_id)
                ->where('status', ACTIVE)
                ->first();

            if (! $exam) {
                $response = $this->responseArray('This Exam is not available or not active!', 404);

                return response()->json($response);
            }

            // Check the subscription's exam_limit
            $subscriptionExamLimit = $activeSubscription->subscription->exam_limit;
            $unlimitedExam = $activeSubscription->subscription->unlimited_exam;

            $enrolledExamsCount = EnrollExam::where('user_id', $user->id)
                ->where('subscription_list_id', $activeSubscription->id)
                ->count();

            if ($unlimitedExam || $enrolledExamsCount < $subscriptionExamLimit) {

                $data = EnrollExam::create([
                    'user_id' => $user->id,
                    'exam_id' => $request->exam_id,
                    'subscription_list_id' => $activeSubscription->id,
                    'status' => PENDING,
                ]);

                // Dispatch the SendEmailQueueJob job
                try {
                    SendEmailQueueJob::dispatch($user->email, new ExamEnrollmentConfirmation($data));
                } catch (\Exception $e) {
                    logger($e->getMessage());
                }

                // Redirect to the dashboard
                return response()->json([
                    'status' => 200,
                    'url' => route('student.exams'),
                    'msg' => 'Subscribe Successfully',
                ]);
            }

            $response = $this->responseArray('You have reached the maximum allowed exams for your subscription!', 401);

            return response()->json($response);
        }

        // Course Item
        if ($request->has('course_id')) {

            // Check course exists or not
            $course = Course::find($request->course_id);
            if (! $course) {

                $response = $this->responseArray('Course not found!', 404);

                return response()->json($response);
            }
        }

        // Bootcamp Item
        if ($request->has('bootcamp_id')) {

            // Check course exists or not
            $bootcamp = Bootcamp::find($request->bootcamp_id);
            if (! $bootcamp) {
                $response = $this->responseArray('Bootcamp not found!', 404);

                return response()->json($response);
            }
        }

        record_created_flash('Subscribe Successfully');

        return redirect()->route('student.dashboard');
    }

    public function responseArray($msg, $status, $cartCount = null): array
    {
        $response['msg'] = $msg;
        $response['status'] = $status;

        if (! is_null($cartCount)) {
            $response['cart_count'] = $cartCount;
        }

        return $response;
    }
}
