<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Jobs\SendEmailQueueJob;
use App\Mail\ExamEnrollmentConfirmation;
use App\Mail\InvoiceMail;
use App\Models\CoachingSlot;
use App\Models\EnrollApi;
use App\Models\EnrollBootcamp;
use App\Models\EnrollCoach;
use App\Models\EnrollCourse;
use App\Models\EnrollEbook;
use App\Models\EnrollExam;
use App\Models\Invoice;
use App\Models\InvoiceItem;
use App\Models\Organization;
use App\Models\Payment;
use App\Models\SubscriptionList;
use App\Models\Transaction;
use App\Models\User;
use App\Notifications\Common\CommonNotification;
use App\Services\BillingService;
use App\Services\Payments\PaypalService;
use App\Services\Payments\StripeNoCodeService;
use App\Services\Utils\ZoomService;
use Carbon\Carbon;
use DateTime;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PaymentController extends Controller
{
    public function __construct(protected BillingService $billingService, private ZoomService $zoomService) {}

    public function pay(Request $request)
    {
        // insert or update billing address
        $this->billingService->insertOrUpdate($request);

        $rules = [
            'value' => ['required', 'numeric'],
            'currency' => ['required'],
            'payment_method' => ['required'],
        ];

        $request->validate($rules);

        if ($request->payment_method == 'stripe') {
            $paymentPlatform = resolve(StripeNoCodeService::class);
            // $paymentPlatform = resolve(StripeService::class);
        }

        if ($request->payment_method == 'paypal') {
            $paymentPlatform = resolve(PaypalService::class);
        }

        session([
            'paymentMethod' => $request->payment_method,
            'pay_approve_route' => 'front.pay.approval',
            'pay_cancel_route' => 'front.pay.cancelled',
        ]);

        return $paymentPlatform->handlePayment($request);
    }

    public function approval()
    {
        if (session()->has('paymentMethod')) {

            $paymentMethod = session()->get('paymentMethod');

            if ($paymentMethod == 'stripe') {
                $paymentPlatform = resolve(StripeNoCodeService::class);
            }

            if ($paymentMethod == 'paypal') {
                $paymentPlatform = resolve(PaypalService::class);
            }

            // return false means transaction failed & true means transaction successed
            $response = $paymentPlatform->handleApproval();

            if ($response) {

                DB::transaction(function () use ($paymentMethod) {

                    $total = Cart::priceTotal();

                    $invoice = Invoice::create([
                        'user_id' => auth()->id(),
                        'total' => $total,
                        'payment_type' => $paymentMethod,
                    ]);

                    Payment::create([
                        'user_id' => auth()->id(),
                        'invoice_id' => $invoice->id,
                        'payment_type' => $paymentMethod,
                        'amount' => $invoice->total,
                    ]);

                    foreach (Cart::content() as $item) {

                        // item type Course start
                        if ($item->options['type'] == CART_TYPE_COURSE) {

                            // Enroll to the course
                            $enrollment = EnrollCourse::create([
                                'user_id' => auth()->id(),
                                'course_id' => $item->id,
                                'status' => 1,
                            ]);

                            //Insert Invoice Item
                            $this->insertInvoiceItem($invoice, $item);

                            // Change user type if the user is a member
                            $user = User::find(auth()->id());
                            $this->migrateMemberToStudent($user);

                            // Get the course owner (teacher)
                            $teacher = User::find($item->options['teacher_id']);

                            // Send notification to the course owner
                            if ($teacher) {
                                $data = [
                                    'type' => 'enrollment',
                                    'title' => 'New Student Enrollment',
                                    'user' => auth()->id(),
                                    'msg' => Auth::user()->full_name.' has enrolled in your course',
                                    'url' => route('teacher.enrolled-students'),
                                ];

                                $teacher->notify(new CommonNotification($data));

                                // Insert Balance
                                $this->insertBalance($item, $teacher);
                            }
                        }

                        // item type Bootcamp start
                        if ($item->options['type'] == CART_TYPE_BOOTCAMP) {

                            // Enroll in the bootcamp
                            $enrollment = EnrollBootcamp::create([
                                'user_id' => auth()->id(),
                                'bootcamp_id' => $item->id,
                                'status' => 1,
                            ]);

                            //Insert Invoice Item
                            $this->insertInvoiceItem($invoice, $item);

                            // Change user type if the user is a member
                            $user = User::find(auth()->id());
                            $this->migrateMemberToStudent($user);

                            // Get the bootcamp owner (teacher)
                            $teacher = User::find($item->options['teacher_id']);

                            // Send notification to the bootcamp owner
                            if ($teacher) {
                                $data = [
                                    'type' => 'enrollment',
                                    'title' => 'New Student Enrollment',
                                    'user' => auth()->id(),
                                    'msg' => Auth::user()->full_name.' has enrolled in your bootcamp',
                                    'url' => route('teacher.enrolled-students'),
                                ];

                                $teacher->notify(new CommonNotification($data));

                                // Insert Balance
                                $this->insertBalance($item, $teacher);
                            }
                        }

                        // item type Exam start
                        if ($item->options['type'] == CART_TYPE_EXAM) {

                            // DB::transaction(function () use ($item) {
                            // Enroll to the Ebook
                            $enroll_exam = EnrollExam::create([
                                'user_id' => auth()->id(),
                                'exam_id' => $item->id,
                            ]);

                            //Insert Invoice Item
                            $this->insertInvoiceItem($invoice, $item);

                            // Change user type if user is member
                            $user = User::find(auth()->id());

                            $this->migrateMemberToStudent($user);
                            // }, 5);

                            // Dispatch the SendEmailQueueJob job
                            try {
                                SendEmailQueueJob::dispatch($user->email, new ExamEnrollmentConfirmation($enroll_exam));
                            } catch (\Exception $e) {
                                logger($e->getMessage());
                            }
                        }

                        // item type Ebook start
                        if ($item->options['type'] == CART_TYPE_EBOOK) {

                            // DB::transaction(function () use ($item) {
                            // Enroll to the Ebook
                            EnrollEbook::create([
                                'user_id' => auth()->id(),
                                'ebook_id' => $item->id,
                                'status' => 1,
                            ]);

                            //Insert Invoice Item
                            $this->insertInvoiceItem($invoice, $item);

                            // Change user type if user is member
                            $user = User::find(auth()->id());

                            $this->migrateMemberToStudent($user);
                            // }, 5);
                        }

                        // item type Coaching start

                        if ($item->options['type'] == CART_TYPE_COACHING) {

                            // DB::transaction(function () use ($item) {
                            $slot = CoachingSlot::find($item->id);
                            // Create Schedule
                            // combine date and time
                            $data['start_time'] = $this->combineDateTime($item->options['date'], $slot->start_time);
                            // add hour and mintues
                            $data['duration'] = ($slot->hour_duration * 60) + $slot->minute_duration;

                            $coaching = EnrollCoach::create([
                                'student_id' => auth()->id(),
                                'coach_id' => $slot->user_id,
                                'coaching_slot_id' => $slot->id,
                                'start_time' => $data['start_time'],
                                'duration' => $data['duration'],
                                'status' => UPCOMING,
                            ]);

                            //Insert Invoice Item
                            $this->insertInvoiceItem($invoice, $item);

                            // Change user type if user is member
                            $user = User::find(auth()->id());

                            $this->migrateMemberToStudent($user);

                            // Get the Coach
                            $coach = User::find($item->options['coach_id']);

                            // Send notification to the coach
                            if ($coach) {
                                // $data = [
                                //     'type' => 'enrollment',
                                //     'title' => 'New Student Enrollment',
                                //     'user' => auth()->id(),
                                //     'msg' => Auth::user()->full_name . ' has enrolled in your bootcamp',
                                //     'url' => route('teacher.enrolled-students'),
                                // ];

                                // $teacher->notify(new CommonNotification($data));

                                // Insert Balance
                                $this->insertBalance($item, $coach);
                            }

                            // create zoom meeting
                            $meetings = $this->createMeeting($data);

                            if ($meetings['status']) {
                                // update coaching data

                                // Define the regex pattern to match the meeting ID
                                $pattern = '/\/j\/(\d+)/';

                                // Perform the regex match
                                preg_match($pattern, $meetings['data']['join_url'], $matches);

                                // Extract the meeting ID from the matched result
                                $meetingId = isset($matches[1]) ? $matches[1] : null;

                                $coaching->update([
                                    // 'meeting_id' => $meetings['data']['id'],
                                    'meeting_id' => $meetingId,
                                    'join_url' => $meetings['data']['join_url'],
                                    'start_url' => $meetings['data']['start_url'],
                                    'password' => $meetings['data']['password'],
                                ]);
                            }
                            // });
                        }

                        // item type API Plan

                        if ($item->options['type'] == CART_TYPE_API) {

                            // Inactive previous plan
                            $enrolledPlan = EnrollApi::whereUserId(auth()->id())->active()->first();

                            if ($enrolledPlan) {
                                $enrolledPlan->update([
                                    'status' => INACTIVE,
                                ]);
                            }

                            // Enroll New Api Plan
                            EnrollApi::create([
                                'user_id' => auth()->id(),
                                'api_plan_id' => $item->id,
                                'plan_type' => $item->options['api_plan_type'],
                                'started_at' => Carbon::now(),
                                'valid_till' => $item->options['api_plan_type'] == API_MONTHLY ? Carbon::now()->addMonth() : Carbon::now()->addMonths(12),
                                'amount' => $item->price,
                            ]);

                            //Insert Invoice Item
                            $this->insertInvoiceItem($invoice, $item);

                            $this->createOrganization();

                            // Change user type if user is member
                            // $user = User::find(auth()->id());

                            // $this->migrateMemberToStudent($user);
                        }

                        // item type Subscription

                        if ($item->options['type'] == CART_TYPE_SUBSCRIPTION) {

                            // DB::transaction(function () use ($item) {
                            // Enroll to the Subscription
                            SubscriptionList::create([
                                'user_id' => auth()->id(),
                                'subscription_id' => $item->id,
                                'subscription_type' => $item->options['subscription_type'],
                                'started_at' => Carbon::now(),
                                'valid_till' => $item->options['subscription_type'] == API_MONTHLY ? Carbon::now()->addMonth() : Carbon::now()->addMonths(12),
                                'amount' => $item->price,
                            ]);

                            //Insert Invoice Item
                            $this->insertInvoiceItem($invoice, $item);

                            // Change user type if user is member
                            $user = User::find(auth()->id());

                            $this->migrateMemberToStudent($user);
                            // }, 5);
                        }
                    }
                    $user = auth()->user();
                    // Dispatch the SendEmailQueueJob job
                    try {
                        SendEmailQueueJob::dispatch($user->email, new InvoiceMail($invoice, $user));
                    } catch (\Exception $e) {
                        logger($e->getMessage());
                    }
                }, 5);

                Cart::destroy();

                return redirect()->route('student.dashboard');
            } else {
                return redirect()->route('front.cart');
            }
        }

        return redirect()
            ->route('front.cart')
            ->withErrors('We cannot retrieve your payment platform. Try again, please.');
    }

    public function cancelled()
    {
        return redirect()->route('cart');
    }

    public function migrateMemberToStudent(User $user)
    {
        if ($user->user_type === USER_TYPE_MEMBER) {
            $user->user_type = USER_TYPE_STUDENT;
            $user->save();
        }

        return true;
    }

    public function createOrganization()
    {
        if (Organization::whereUserId(auth()->id())->doesntExist()) {
            Organization::create([
                'user_id' => auth()->id(),
            ]);
        }
    }

    public function createMeeting($data)
    {

        $dateTime = new DateTime($data['start_time']);
        $startTime = $dateTime->format('Y-m-d\TH:i:s\Z');

        $meetings = $this->zoomService->createMeeting([
            // "agenda" => 'your agenda',
            'topic' => 'Coaching',
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

    public function combineDateTime($dateString, $timeString)
    {
        // Create a DateTime object with the date
        $date = new DateTime($dateString);

        // Extract the time components
        [$hour, $minute, $second] = explode(':', $timeString);

        // Set the time part of the DateTime object
        $date->setTime($hour, $minute, $second);

        // Now $date contains both the date and time
        return $date->format('Y-m-d H:i:s'); // Output in the format 'Y-m-d H:i:s'

    }

    public function insertInvoiceItem($invoice, $item)
    {
        InvoiceItem::create([
            'invoice_id' => $invoice->id,
            'itemable_id' => $item->id,
            'itemable_type' => $item->associatedModel,
            'price' => $item->price,
        ]);
    }

    public function insertBalance($item, $user)
    {
        DB::transaction(function () use ($item, $user) {

            $totalPrice = $item->price;

            // Deduct comission
            $comissionPercentage = config('settings.system_commission');
            $comissionAmount = ($totalPrice * $comissionPercentage) / 100;
            $amount = $totalPrice - $comissionAmount;

            Transaction::create([
                'user_id' => $user->id,
                'transactionable_id' => $item->id,
                'transactionable_type' => $item->associatedModel,
                'amount' => $amount,
                'type' => CREDIT,
            ]);
            // increment balance in the user table
            $user->increment('balance', $amount);
        });
    }
}
