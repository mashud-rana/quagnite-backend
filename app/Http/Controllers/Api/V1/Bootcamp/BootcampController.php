<?php

namespace App\Http\Controllers\Api\V1\Bootcamp;

use App\Models\Bootcamp;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Bootcamp\BootcampResource;

/**
 * @group Bootcamps
 *
 * Managing Bootcamps
 */
class BootcampController extends Controller
{
    /**
     * Get All Bootcamps
     *
     * List all the Bootcamps
     *
     * @queryParam per_page optional The number of items per page. Defaults to 10.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $perPage = $request->input('per_page') ?? 10;

        $bootcamps = Bootcamp::approved()->with('user')->paginate($perPage)->appends(
            [
                'per_page' => $perPage
            ]
        );

        return BootcampResource::collection($bootcamps);
    }

    // /**
    //  * Store Bootcamp
    //  *
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Get A Bootcamp
     *
     * Display the specified resource.
     *
     * @urlParam id integer required The ID of the bootcamp.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bootcamp = Bootcamp::approved()->with('lessons.lecture', 'user')->find($id);

        if (!$bootcamp) {
            return response()->json(['error' => 'Not found'], 404);
        }

        return BootcampResource::make($bootcamp);
    }

    // /**
    //  * Update Bootcamp
    //  *
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // /**
    //  * Delete bootcamp
    //  *
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }
}
