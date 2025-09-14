<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Event;
use App\Models\Article;
use App\Models\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SocialShareController extends Controller
{
    public function incrementSocialShareCount(Request $request)
    {
        // Explode for getting the slug
        $arrUrl = explode('/', $request->url);
        $slug = end($arrUrl);

        // Seach and incremnt value
        if (in_array("article-details", $arrUrl)) {
            $article = Article::whereSlug($slug)->first();
            $article->total_share += 1;
            $article->save();
            $result = "Article share count incremented";
        } else if ((in_array("event-details", $arrUrl)) || (in_array("seminar-details", $arrUrl)) || (in_array("workshop-details", $arrUrl))) {
            $event = Event::whereSlug($slug)->first();
            $event->total_share += 1;
            $event->save();
            $result = "Event share count incremented";
        } else if (in_array("session-details", $arrUrl)) {
            $session = Session::whereSlug($slug)->first();
            $session->total_share += 1;
            $session->save();
            $result = "Session share count incremented";
        } else {
            $result = "Something went wrong!";
        }

        return response()->json(['result' => $result]);
    }

    /**
     * Add or remove user's favorite on article
     */
    public function addFavorite($id)
    {
        $user = Auth::user();
        $isFavorite = $user->favorite_articles()->where('article_id', $id)->count();

        if ($isFavorite == 0) {
            $user->favorite_articles()->attach($id);
            record_created_flash('Article added to your favorite list.');
            return back();
        } else {
            $user->favorite_articles()->detach($id);
            record_created_flash('Favorite removed from a article!');
            return back();
        }
    }

    /**
     * Add or remove user's favorite on article
     */
    public function addFavoriteAxios($id)
    {
        $user = Auth::user();
        $isFavorite = $user->favorite_articles()->where('article_id', $id)->count();

        if ($isFavorite == 0) {
            $user->favorite_articles()->attach($id);
            record_created_flash('Article added to your favorite list.');
            return response()->json(['add' => true]);
        } else {
            $user->favorite_articles()->detach($id);
            record_created_flash('Favorite removed from a article!');
            return response()->json(['add' => false]);
        }
    }
}
