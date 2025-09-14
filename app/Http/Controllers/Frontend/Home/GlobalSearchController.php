<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Course;
use App\Models\Event;
use App\Models\ForumPost;
use App\Models\Wiki;
use Illuminate\Http\Request;

class GlobalSearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('q');

        $courseResults = Course::search($query)
            ->where('status', APPROVED)
            ->get();
        $blogResults = Blog::search($query)
            ->where('status', ACTIVE)
            ->get();
        $eventResults = Event::search($query)->get();
        $wikiResults = Wiki::search($query)
            ->where('status', PUBLISHED)
            ->get();
        $forumResults = ForumPost::search($query)
            ->where('status', ACTIVE)
            ->get();

        // Add URLs to each result
        $courseResults = $courseResults->map(function ($result) {
            $result->url = route('course.details', ['slug' => $result->slug]);

            return $result;
        });

        $blogResults = $blogResults->map(function ($result) {
            $result->url = route('blog.details', ['slug' => $result->slug]);

            return $result;
        });

        $eventResults = $eventResults->map(function ($result) {
            $result->url = route('event.details', ['slug' => $result->slug]);

            return $result;
        });

        $wikiResults = $wikiResults->map(function ($result) {
            $result->url = route('wiki.details', ['slug' => $result->slug]);

            return $result;
        });

        $forumResults = $forumResults->map(function ($result) {
            $result->url = route('forum.forumPostDetails', ['uuid' => $result->uuid]);

            return $result;
        });

        $allResults = $courseResults->concat($blogResults)->concat($eventResults)->concat($wikiResults)->concat($forumResults);

        return response()->json($allResults);
    }
}
