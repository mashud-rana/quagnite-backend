<?php

use Carbon\Carbon;
use App\Models\Exam;
use App\Models\User;
use App\Models\Course;
use Illuminate\Support\Str;
use App\Models\CourseLesson;
use App\Models\CourseContent;
use App\Models\TicketComment;
use App\Constants\GlobalConstant;
use App\Models\CoachingDayStatus;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\CompletedStudentCourse;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

if (! function_exists('imHere')) {
    function imHere($param = null)
    {
        return $param ? dd($param) : dd('I am Here');
    }
}

if (! function_exists('currency_symbol')) {
    function currency_symbol(): string
    {
        return '$';
    }
}

if (! function_exists('seconds_to_hour')) {
    function seconds_to_hour($init)
    {
        $hours = floor($init / 3600);
        $minutes = floor(($init / 60) % 60);

        return $hours.'h '.$minutes.'m';
    }
}

if (! function_exists('feature_string_to_array')) {
    function feature_string_to_array($str)
    {
        return explode('|', $str);
    }
}

if (! function_exists('tag_process_for_front')) {
    function tag_process_for_front($tag_str)
    {
        try {
            $tag_array = tag_string_to_array($tag_str);
            $process_tag = [];
            foreach ($tag_array as $tag) {
                $t = new \stdClass();
                $t->value = $tag;
                $process_tag[] = $t;
            }

            return json_encode($process_tag);
        } catch (Exception $e) {
            log_error($e);

            return '';
        }
    }
}
if (! function_exists('tag_string_to_array')) {
    function tag_string_to_array($str)
    {
        return explode(',', $str);
    }
}

if (! function_exists('tags_to_string')) {
    function tags_to_string($tag_array)
    {
        $all_tags = [];
        try {
            foreach (json_decode($tag_array) as $tag) {
                $all_tags[] = $tag->value;
            }
        } catch (Exception $e) {
            log_error($e);
        }

        return implode(',', $all_tags);
    }
}

function str_title($title)
{
    return Str::title($title);
}

function get_current_route_name()
{
    //    Log::info(Route::current()->getName());
    return Route::current()->getName();
}

if (! function_exists('days_ago_from_now')) {

    function days_ago_from_now($date, $full = false)
    {
        $now = new DateTime();
        $ago = new DateTime($date);
        $diff = $now->diff($ago);

        $weeks = floor($diff->d / 7);
        $diff->d -= $weeks * 7;

        $string = [
            'y' => 'year',
            'm' => 'month',
            'w' => 'week',
            'd' => 'day',
            'h' => 'hour',
            'i' => 'minute',
            's' => 'second',
        ];

        $values = [
            'y' => $diff->y,
            'm' => $diff->m,
            'w' => $weeks,
            'd' => $diff->d,
            'h' => $diff->h,
            'i' => $diff->i,
            's' => $diff->s,
        ];

        foreach ($string as $k => &$v) {
            if ($values[$k]) {
                $v = $values[$k].' '.$v.($values[$k] > 1 ? 's' : '');
            } else {
                unset($string[$k]);
            }
        }

        if (! $full) {
            $string = array_slice($string, 0, 1);
        }

        return $string ? implode(', ', $string).' ago' : 'just now';
    }
}

if (! function_exists('make_2_digits')) {

    function make_2_digits($num)
    {
        return sprintf('%02d', $num);
    }
}

if (! function_exists('random_number')) {
    function random_number()
    {
        return random_int(100000, 999999);
    }
}

if (! function_exists('str_limit')) {

    function str_limit($string, $limit, $end = '...')
    {
        return Str::limit($string, $limit, $end);
    }
}

if (! function_exists('month_list')) {

    function month_list()
    {
        return [
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
            'July',
            'August',
            'September',
            'October',
            'November',
            'December',
        ];
    }
}

if (! function_exists('get_storage_image')) {

    function get_storage_image($path, $name, $type = 'normal')
    {
        $full_path = '/storage/'.$path.'/'.$name;
        if ($name) {
            $image_path = storage_path('app/public/'.$path.'/'.$name);
            if (file_exists($image_path)) {
                return asset($full_path);
            }
        }

        return get_default_image($type);
    }
}
if (! function_exists('get_storage_file')) {
    function get_storage_file($path, $name)
    {
        $full_path = '/storage/'.$path.'/'.$name;
        if ($name) {
            return asset($full_path);
        }

        return get_default_image();
    }
}

if (! function_exists('get_default_image')) {

    function get_default_image($type = 'normal')
    {
        if ($type == 'user') {
            return asset('/images/user_default.png');
        } elseif ($type == 'normal') {
            return asset('/images/default.png');
        }
    }
}

if (! function_exists('generate_slug')) {
    function generate_slug($value)
    {
        try {
            return preg_replace('/\s+/u', '-', trim($value));
        } catch (\Exception $e) {
            return '';
        }
    }
}
if (! function_exists('record_custom_flash')) {

    function record_custom_flash($message = null)
    {
        Session::flash('custom', $message ?? 'Record modified successfully');
    }
}

if (! function_exists('message_send_flash')) {

    function message_send_flash($message = null)
    {
        Session::flash('message', $message ?? 'Your message was sent successfully');
    }
}

if (! function_exists('record_created_flash')) {

    function record_created_flash($message = null)
    {
        Session::flash('success', $message ?? 'Record created successfully');
    }
}

if (! function_exists('record_updated_flash')) {

    function record_updated_flash($message = null)
    {
        Session::flash('update', $message ?? 'Record updated successfully');
    }
}

if (! function_exists('record_verified_flash')) {

    function record_verified_flash($message = null)
    {
        Session::flash('verified', $message ?? 'Record updated successfully');
    }
}

if (! function_exists('file_uploaded_flash')) {

    function file_uploaded_flash($message = null)
    {
        Session::flash('file_uploaded', $message ?? 'Record updated successfully');
    }
}

if (! function_exists('record_deleted_flash')) {

    function record_deleted_flash($message = null)
    {
        Session::flash('delete', $message ?? 'Record deleted successfully');
    }
}

if (! function_exists('something_wrong_flash')) {

    function something_wrong_flash($message = null)
    {
        Session::flash('error', $message ?? 'Something is wrong!');
    }
}

if (! function_exists('custom_flash')) {

    function custom_flash($title = null, $message = null)
    {
        Session::flash('custom_title', $title);
        Session::flash('custom_message', $message);
    }
}

if (! function_exists('log_error')) {

    function log_error(Exception $e)
    {
        Log::error($e->getMessage());
    }
}

if (! function_exists('get_page_meta')) {

    function get_page_meta($metaName = 'title', $raw = false)
    {
        if (session()->has('page_meta_'.$metaName)) {
            $title = session()->get('page_meta_'.$metaName);
            //            session()->forget("page_meta_" . $metaName);
            if ($raw) {
                return str_replace(' |', '', $title);
            } else {
                return $title;
            }
        }

        return null;
    }
}

if (! function_exists('set_page_meta')) {

    function set_page_meta($content = null, $metaName = 'title')
    {
        if ($content && $metaName == 'title') {
            session()->put('page_meta_'.$metaName, $content.' |');
        } else {
            session()->put('page_meta_'.$metaName, $content);
        }
    }
}
if (! function_exists('custom_datetime')) {

    function custom_datetime($datetime, $format = null)
    {
        if ($format) {
            return date($format, strtotime($datetime));
        }

        return date('M j, Y, g:i A', strtotime($datetime));
    }
}

if (! function_exists('custom_date')) {

    function custom_date($datetime, $format = null)
    {
        if ($format) {
            return date($format, strtotime($datetime));
        }

        return date('M j, Y', strtotime($datetime));
    }
}

if (! function_exists('user_fullname')) {

    function user_fullname($user)
    {
        if ($user->middle_name) {
            return $user->first_name.' '.$user->middle_name.' '.$user->last_name;
        } else {
            return $user->first_name.' '.$user->last_name;
        }
    }
}

if (! function_exists('work_study_year_showing')) {

    function work_study_year_showing($data)
    {
        if ($data->start_date && $data->end_date) {
            $start = explode('-', $data->start_date);
            $end = explode('-', $data->end_date);

            return $start[0].' - '.$end[0];
        } elseif ($data->start_date && $data->is_present) {
            $start = explode('-', $data->start_date);

            return $start[0].' - Present ';
        } else {
            return 'N/A';
        }
    }
}

if (! function_exists('show_company_type')) {

    function show_company_type($type)
    {
        if ($type == 'sponsorship') {
            return 'Sponsorship';
        } elseif ($type == 'seeking-students') {
            return 'Seeking Students';
        } elseif ($type == 'event') {
            return 'Host Events / Seminars';
        } else {
            return '';
        }
    }
}

if (! function_exists('getImage')) {
    function getImage($image = null, $type = null)
    {
        if ($image && Storage::disk('public')->exists($image)) {
            return Storage::disk('public')->url($image);
        } else {
            return asset('/images/default.png');
        }
    }
}

if (! function_exists('show_company_name')) {

    function show_company_name($user_id)
    {
        $user = User::where('id', $user_id)->select('id', 'first_name', 'last_name', 'company_name')->first();

        return $user->company_name;
    }
}

if (! function_exists('show_limited_string')) {

    function show_limited_string($str, $length)
    {
        return strlen($str) > $length ? substr($str, 0, $length).'...' : $str;
    }
}

if (! function_exists('course_progress_pecentage')) {

    function course_progress_pecentage($course_id)
    {
        $percentage = 0;
        $completd = CompletedStudentCourse::where(['course_id' => $course_id, 'student_id' => auth()->id()])->count();
        $total = CourseLesson::where('course_id', $course_id)->count();

        if ($total > 0 && $completd > 0) {
            $percentage = round(($completd / $total) * 100);
        }

        return $percentage;
    }
}

if (! function_exists('is_completd_lesson')) {

    function is_completd_lesson($cid, $mid, $lid)
    {
        $found = CompletedStudentCourse::where(['course_id' => $cid, 'module_id' => $mid, 'lesson_id' => $lid, 'student_id' => auth()->id()])->first();
        if ($found) {
            return true;
        }

        return false;
    }
}

if (! function_exists('commission')) {

    function commission($fee_amount, $total_attendee)
    {
        $commission = round((($fee_amount * $total_attendee) * Config('settings.system_COMMISSION')) / 100, 2);

        return $commission;
    }
}

if (! function_exists('is_published_course')) {

    function is_published_course($course_id)
    {
        return Course::where('id', $course_id)->whereStatus('pending')->first();
    }
}

if (! function_exists('replies')) {
    function replies($ticket_id, $parent_id)
    {
        return $replies = TicketComment::where('type', GlobalConstant::TICKET_REPLY_TYPE_REPLY)->where('ticket_id', $ticket_id)->where('parent_id', $parent_id)->get();
    }
}

if (! function_exists('getDayAvailableStatus')) {

    function getDayAvailableStatus($day)
    {
        $item = CoachingDayStatus::where('user_id', Auth::id())->where('day', $day)->first();
        if ($item) {
            $status = 1;
        } else {
            $status = 0;
        }

        return $status;
    }
}

if (! function_exists('getTotalVideoDuration')) {
    function getTotalVideoDuration($model, $id)
    {
        $duration = 0; //in Hour:minute:second
        if ($model == 'module') {
            $content_total_duration_in_second = CourseContent::where('module_id', $id)->where('content_type', 'video')->sum('content_duration');
            $duration = gmdate('H:i:s', $content_total_duration_in_second);
        }

        if ($model == 'course') {
            $content_total_duration_in_second = CourseContent::where('course_id', $id)->where('content_type', 'video')->sum('content_duration');
            $duration = gmdate('H:i:s', $content_total_duration_in_second);
        }

        return $duration;
    }
}

if (! function_exists('getCourseModuleOrFinalExam')) {
    function getCourseModuleOrFinalExam($exam_type, $course_id, $exam_for, $module_id)
    {
        $exams = Exam::where('exam_type', $exam_type)
            ->where('course_id', $course_id)
            ->where('exam_for', $exam_for)
            ->where('module_id', $module_id)
            ->get();

        return $exams;
    }
}

if (! function_exists('getCourseOrModuleTotalExam')) {
    function getCourseOrModuleTotalExam($model, $id)
    {
        $count = 0;
        if ($model == 'module') {
            $count = Exam::where('module_id', $id)->count();
        }

        if ($model == 'course') {
            $count = Exam::where('course_id', $id)->count();
        }

        return $count;
    }
}

// if (!function_exists('getCourseTotalModule')) {
//     function getCourseTotalModule($id)
//     {
//         $count = CourseModule::where('course_id', $id)->count();
//         return $count;
//     }
// }

function getStoreFile($file, $storage_type = null)
{
    if (is_null($file) || empty($file)) {
        return asset('images/default.png');
    }

    $disk = $storage_type ?? config('settings.storage_driver');

    try {
        if (Storage::disk($disk)->exists($file)) {

            return Storage::disk($disk)->url($file);
        } else {

            return asset('images/default.png');
        }
    } catch (\Exception $e) {
        logger($e->getMessage());

        return asset('images/default.png');
    }
}

function formatNumberWithKM($number)
{
    if ($number < 1000) {
        return $number;
    } elseif ($number < 1000000) {
        return round($number / 1000, 1).'K';
    } else {
        return round($number / 1000000, 1).'M';
    }
}

function getGlobalStatusName($status)
{
    switch ($status) {
        case PENDING:
            return 'Pending';
            break;
        case ACTIVE:
            return 'Active';
            break;
        case INACTIVE:
            return 'Inactive';
            break;
        case HOLD:
            return 'Hold';
            break;
        case BLOCK:
            return 'Blocked';
            break;
        case INPROGRESS:
            return 'Inprogress';
            break;
        case ARCHIVE:
            return 'Archived';
            break;
        case COMPLETE:
            return 'Completed';
            break;
        case REJECT:
            return 'Rejected';
            break;
        case DRAFT:
            return 'Draft';
            break;
        case PUBLISHED:
            return 'Published';
            break;
        case UPCOMING:
            return 'Upcoming';
            break;
        case EXPIRED:
            return 'Expired';
            break;
        case CLOSED:
            return 'Closed';
            break;
        case ASSIGNED:
            return 'Assigned';
            break;
        case ANSWERED:
            return 'Answered';
            break;
        case OPEN:
            return 'Open';
            break;
        case APPROVED:
            return 'Approved';
            break;
        case PAST:
            return 'Past';
            break;
        default:
            return 'Undefined';
    }
}

function getGlobalStatusBg($status)
{
    switch ($status) {
        case PENDING:
            return 'bg-warning';
            break;
        case ACTIVE:
            return 'bg-success';
            break;
        case INACTIVE:
            return 'bg-danger';
            break;
        case PAST:
            return 'bg-danger';
            break;
        case HOLD:
            return 'bg-info';
            break;
        case BLOCK:
            return 'bg-danger';
            break;
        case CLOSED:
            return 'bg-warning';
            break;
        case INPROGRESS:
            return 'bg-info';
            break;
        case ARCHIVE:
            return 'bg-danger';
            break;
        case COMPLETE:
            return 'bg-success';
            break;
        case REJECT:
            return 'bg-danger';
            break;
        case DRAFT:
            return 'bg-info';
            break;
        case PUBLISHED:
            return 'bg-success';
            break;
        case UPCOMING:
            return 'bg-info';
            break;
        case EXPIRED:
            return 'bg-danger';
            break;
        case ANSWERED:
            return 'bg-info';
            break;
        case OPEN:
            return 'bg-primary';
            break;
        case ASSIGNED:
            return 'bg-success';
            break;
        case APPROVED:
            return 'bg-primary';
            break;
        default:
            return 'bg-primary';
    }
}

function generatePassword($length = 12)
{
    $letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $characters = '!@#$%&*()[]{}';

    $all = $letters.$numbers.$characters;

    // Ensure at least one of each character type is included
    $password = $letters[rand(0, strlen($letters) - 1)].
        $numbers[rand(0, strlen($numbers) - 1)].
        $characters[rand(0, strlen($characters) - 1)];

    // Fill the remaining length with a random selection from all character types
    for ($i = strlen($password); $i < $length; $i++) {
        $password .= $all[rand(0, strlen($all) - 1)];
    }

    // Shuffle the password to avoid predictable patterns
    return str_shuffle($password);
}

if (!function_exists('generateOTP')) {

    function generateOTP($length = 6) {
        // Generate a random integer and pad it to ensure it's 6 digits
        return str_pad(random_int(0, 999999), $length, '0', STR_PAD_LEFT);
    }
}

if (!function_exists('totalSecToHourMin')) {
    /**
     * Calculate total lecture duration and format as "1h 10m" or "45m"
     *
     * @param  int  $totalSeconds
     * @return string
     */
    function totalSecToHourMin($totalSeconds): string
    {
        if($totalSeconds == 0){
            return '0m';
        }
        if(empty($totalSeconds) || is_null($totalSeconds)){
            return '0m';
        }
        $hours   = floor($totalSeconds / 3600);
        $minutes = floor(($totalSeconds % 3600) / 60);

        return trim(
            ($hours > 0 ? "{$hours}h " : '') .
            ($minutes > 0 ? "{$minutes}m" : '')
        );
    }
}

if (!function_exists('formatLectureDuration')) {
    /**
     * Calculate total lecture duration and format as "1h 10m" or "45m"
     *
     * @param  \Illuminate\Support\Collection|array  $lectures
     * @return string
     */
    function formatLectureDuration($lectures): string
    {
        if(!empty($lectures) && $lectures->isEmpty()){
            return '0m';
        }
        $totalSeconds = collect($lectures)->reduce(function ($carry, $lecture) {
            return $carry + ((int) $lecture['minutes'] * 60) + (int) $lecture['seconds'];
        }, 0);

        return totalSecToHourMin($totalSeconds);

    }
}


if (!function_exists('formatDate')) {
    /**
     * Format a datetime into a human-readable date
     *
     * @param  string|\DateTimeInterface  $datetime
     * @param  string  $format
     * @return string
     */
    function formatDate($datetime, string $format = 'd M Y'): string
    {
        return Carbon::parse($datetime)->format($format);
    }
}
