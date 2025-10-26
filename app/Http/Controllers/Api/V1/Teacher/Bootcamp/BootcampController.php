<?php

namespace App\Http\Controllers\Api\V1\Teacher\Bootcamp;

use App\Http\Controllers\Controller;
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
}
