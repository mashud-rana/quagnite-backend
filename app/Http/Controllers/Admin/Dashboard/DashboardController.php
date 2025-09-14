<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\DataTables\Admin\DemoBookDataTable;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\DemoBook;
use App\Models\User;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        set_page_meta('Dashboard');

        $data['studentCount'] = User::whereUserType(USER_TYPE_STUDENT)->count();

        // Get the current date and time
        $now = Carbon::now();

        // Calculate the date 15 days ago
        $startDate = $now->subDays(15);

        // Query the database to get records created in the last 15 days
        $data['newStudentCount'] = User::whereUserType(USER_TYPE_STUDENT)->where('created_at', '>=', $startDate)->count();

        $data['coursesCount'] = Course::approved()->count();

        return view('admin.dashboard.index', $data);
    }

    public function adminPreview()
    {
        return view('admin.admin_preview.index');
    }

}
