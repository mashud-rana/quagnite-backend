<?php

namespace App\Http\Controllers\Api\V1\Teacher\Bootcamp;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Teacher\BootcampStoreRequest;
use App\Models\Bootcamp;
use App\Models\BootcampCategory;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class BootcampController extends Controller
{
    use ApiResponse;
    public function bootcampCategoryList()
    {
        $bootcampCategories = BootcampCategory::active()->get();

        return $this->success($bootcampCategories, 'Bootcamp Categories Fetched Successfully');
    }

    public function store(BootcampStoreRequest $request)
    {
        logger('request for create bootcamp', [
            $request->validated()
        ]);

        $data = $request->validated();


        Bootcamp::create($data);
        return $this->success(null, 'Bootcamp Created Successfully');
    }
}
