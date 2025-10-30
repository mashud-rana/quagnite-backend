<?php

namespace App\Http\Controllers\Api\V1\Teacher\Bootcamp;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Teacher\BootcampStoreRequest;
use App\Http\Requests\Api\V1\Teacher\BootcampStoreUpdateRequest;
use App\Http\Resources\Api\V1\Teacher\Bootcamp\BootcampResource;
use App\Models\Bootcamp;
use App\Models\BootcampCategory;
use App\Services\Api\V1\Teacher\Bootcamp\BootcampCreateService;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class BootcampController extends Controller
{
    use ApiResponse;

    public function __construct(private BootcampCreateService $bootcampCreateService){

    }
    public function bootcampCategoryList()
    {
        $bootcampCategories = BootcampCategory::active()->get();

        return $this->success($bootcampCategories, 'Bootcamp Categories Fetched Successfully');
    }

    public function store(BootcampStoreRequest $request)
    {
        $response = $this->bootcampCreateService->storeBootcamp($request, $this->tmpDirectory());
        return $this->success(new BootcampResource($response), 'Bootcamp Created Successfully');
    }

    public function updateCourse(BootcampStoreUpdateRequest $request)
    {
        $response = $this->bootcampCreateService->updateBootcamp($request, $this->tmpDirectory());
        return $this->success(new BootcampResource($response), 'Bootcamp Update Successfully');
    }


    private function tmpDirectory()
    {
        return 'uploads/tmp/' . date('m-d-Y') . '/' . auth()->id() . '/';
    }
}
