<?php

namespace App\Http\Controllers\Api\V1\Forum;

use App\Http\Controllers\Controller;
use App\Http\Resources\Forum\ForumResource;
use App\Models\ForumPost;
use Illuminate\Http\Request;

/**
 * @group Forums
 *
 * Managing Forums
 */
class ForumController extends Controller
{
    /**
     * Get All Forums
     *
     * List all the Forums
     *
     * @queryParam per_page optional The number of items per page. Defaults to 10.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $perPage = $request->input('per_page') ?? 10;

        $forums = ForumPost::active()->with('user')->paginate($perPage)->appends(
            [
                'per_page' => $perPage
            ]
        );

        return ForumResource::collection($forums);
    }

    // /**
    //  * Store Forum
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
     * Get A Forum
     *
     * Display the specified resource.
     *
     * @urlParam id integer required The ID of the forum.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $forum = ForumPost::active()->with('user', 'comments.user', 'comments.commentReplies.user')->find($id);

        if (!$forum) {
            return response()->json(['error' => 'Not found'], 404);
        }

        return ForumResource::make($forum);
    }

    // /**
    //  * Update Forum
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
    //  * Delete Forum
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
