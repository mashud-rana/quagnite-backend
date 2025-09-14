<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;

class CoachesController extends Controller
{
    public function index()
    {
        set_page_meta('Coaches');

        $data['coaches'] = User::active()->where(
            'user_type',
            USER_TYPE_COACH
        )->with('coach')->inRandomOrder()->paginate(4);

        return view('frontend.coaching.index', $data);
    }

    public function coachList()
    {
        set_page_meta('All Coaches');
        $coaches = User::active()->where(
            'user_type',
            USER_TYPE_COACH
        )->with('coach.enrollments')->paginate(4);
        $coachesBusiness = User::active()->where(
            'user_type',
            USER_TYPE_COACH
        )->with('coach.enrollments')->inRandomOrder()->paginate(4);

        // $coachesMachine = User::active()->where(
        //     'user_type',
        //     USER_TYPE_COACH
        // )->with('coach')->inRandomOrder()->paginate(4);
        // $coachesDevops = User::active()->where(
        //     'user_type',
        //     USER_TYPE_COACH
        // )->with('coach')->inRandomOrder()->paginate(4);
        // dd($coaches);
        return view('frontend.coaching.list', [
            'popularCoaches' => $coaches,
            'coachesBusiness' => $coachesBusiness,
            // 'coachesMachine' => $coachesMachine,
            // 'coachesDevops' => $coachesDevops,
        ]);
    }
}
