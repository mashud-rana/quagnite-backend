<?php

namespace App\Http\Controllers\Admin\Bootcamp;

use App\DataTables\Admin\Bootcamp\AllBootcampsDataTable;
use App\DataTables\Admin\Bootcamp\ApproveBootcampsDataTable;
use App\DataTables\Admin\Bootcamp\HoldBootcampsDataTable;
use App\DataTables\Admin\Bootcamp\PendingBootcampsDataTable;
use App\Http\Controllers\Controller;
use App\Models\Bootcamp;
use App\Models\BootcampLesson;
use App\Services\Bootcamp\BootcampCreateService;

class BootcampController extends Controller
{
    public function __construct(private BootcampCreateService $bootcampCreateService)
    {
        $this->middleware('permission:All Bootcamps|Approve Bootcamp|Hold Bootcamp|Delete Bootcamp', ['only' => ['AllBootcamps', 'HoldBootcamps', 'ApproveBootcamps']]);
        $this->middleware('permission:Approve Bootcamp', ['only' => ['statusChange']]);
        $this->middleware('permission:Hold Bootcamp', ['only' => ['statusChange']]);
        $this->middleware('permission:Delete Bootcamp', ['only' => ['destroy']]);
    }

    public function AllBootcamps(AllBootcampsDataTable $dataTable)
    {
        set_page_meta('All Bootcamps');

        return $dataTable->render('admin.bootcamp.all-bootcamps');
    }

    public function HoldBootcamps(HoldBootcampsDataTable $dataTable)
    {
        set_page_meta('Hold Bootcamps');

        return $dataTable->render('admin.bootcamp.hold-bootcamps');
    }

    public function ApproveBootcamps(ApproveBootcampsDataTable $dataTable)
    {
        set_page_meta('Approve Bootcamps');

        return $dataTable->render('admin.bootcamp.approve-bootcamps');
    }

    public function PendingBootcamps(PendingBootcampsDataTable $dataTable)
    {
        set_page_meta('Pending Bootcamps');

        return $dataTable->render('admin.bootcamp.pending-bootcamps');
    }

    public function approved()
    {
        $data['title'] = 'Approved Bootcamps';
        $data['Bootcamps'] = Bootcamp::where('status', APPROVED)->paginate(25);

        return view('admin.bootcamp.approved', $data);
    }

    public function reviewPending()
    {
        $data['title'] = 'Review Pending bootcamps';
        $data['Bootcamps'] = Bootcamp::where('status', PENDING)->paginate(25);

        return view('admin.bootcamp.review-pending', $data);
    }

    public function statusChange($id, $status)
    {

        $bootcamp = Bootcamp::findOrFail($id);
        $bootcamp->status = $status;
        $bootcamp->save();

        record_updated_flash('bootcamp Status Updated Successfully');

        return back();
    }

    public function delete($id)
    {
        record_deleted_flash('bootcamp Deleted Successfully');

        return back();
    }

    public function show($slug, $uuid = null)
    {
        set_page_meta('Bootcamp');

        // Bootcamp Data
        $data['bootcamp'] = Bootcamp::where('slug', $slug)->firstOrFail();
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

        return view('admin.bootcamp.show', $data);
    }
}
