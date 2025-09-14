<?php

namespace App\Http\Controllers\Common\Company;

use App\Constants\GlobalConstant;
use App\Http\Controllers\Controller;
use App\Services\Company\JobService;
use App\Services\Event\EventService;
use App\Services\User\UserService;

class CompanyController extends Controller
{
    protected $userService;

    protected $eventService;

    protected $jobService;

    public function __construct(UserService $userService, EventService $eventService, JobService $jobService)
    {
        $this->userService = $userService;
        $this->eventService = $eventService;
        $this->jobService = $jobService;
    }

    public function index()
    {
        $companies = $this->userService->getPaginatedActiveUserByType(GlobalConstant::DEFAULT_PER_PAGE, ['company_profile_info'], false, 'created_at', 'DESC', USER_TYPE_COMPANY); //sort='created_at'
        set_page_meta('Company List');

        return view('common.companies.index', compact('companies'));
    }

    public function show($id)
    {
        $item = $this->userService->get($id, ['company_profile_info'], false);
        $events = $this->eventService->getRecentActiveByUserID(4, ['owner_info'], $id, GlobalConstant::EVENT_TYPE_EVENT);
        $jobs = $this->jobService->getRecentActiveByUserID(3, ['company'], $id);
        set_page_meta('Company Details');

        return view('common.companies.show', compact('item', 'events', 'jobs'));
    }
}
