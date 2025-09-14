<?php

namespace App\Http\Controllers\Api\V1\Ebook;

use App\Models\Ebook;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Ebook\EbookResource;

/**
 * @group Ebooks
 *
 * Managing Ebooks
 */
class EbookController extends Controller
{
    /**
     * Get All Ebooks
     *
     * List all the Ebooks
     *
     * @queryParam per_page optional The number of items per page. Defaults to 10.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $perPage = $request->input('per_page') ?? 10;

        $ebooks = Ebook::published()->paginate($perPage)->appends(
            [
                'per_page' => $perPage
            ]
        );

        return EbookResource::collection($ebooks);
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
     * Get A Ebook
     *
     * Display the specified resource.
     *
     * @urlParam id integer required The ID of the ebook.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ebook = Ebook::published()->find($id);

        if (!$ebook) {
            return response()->json(['error' => 'Not found'], 404);
        }

        return EbookResource::make($ebook);
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
    //  * Delete Bootcamp
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
