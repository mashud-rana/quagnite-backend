<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Wiki;
use App\Models\WikiCategory;

class WikiController extends Controller
{
    public function index()
    {
        set_page_meta('Wikis');
        $wikis = Wiki::published()->with('user')->with('category')->orderBy('id', 'desc')->paginate(6);
        $randomSingle = Wiki::published()->with('user')->with('category')->inRandomOrder()->take(1)->get();
        $randomTwo = Wiki::published()->with('user')->with('category')->inRandomOrder()->take(2)->get();
        $wikiCategories = WikiCategory::all();

        return view('frontend.wiki.index', [
            'wikis' => $wikis,
            'wikiCategories' => $wikiCategories,
            'randomSingle' => $randomSingle,
            'randomTwo' => $randomTwo,
        ]);
    }

    public function wikiDetails($slug)
    {
        set_page_meta('Wiki Details');

        // Fetch the wiki entry by slug
        $wiki = Wiki::where('slug', $slug)->first();
        if (! $wiki) {
            abort(404, 'Wiki not found');
        }

        $random = Wiki::published()
            ->with(['user', 'category'])
            ->inRandomOrder()
            ->take(3)
            ->get();

        // Generate social share buttons
        $buttons = \Share::page(route('wiki.details', $slug), $wiki->title)
            ->facebook()
            ->twitter()
            ->linkedin()
            ->reddit();

        return view('frontend.wiki.details', [
            'wiki' => $wiki,
            'random' => $random,
            'buttons' => $buttons,
        ]);
    }

    public function sortByOldNew(string $type)
    {
        if ($type === 'old') {
            $data['wikis'] = Wiki::published()->with('user')->with('category')->orderBy('id', 'asc')->paginate(8);
        } else {
            $data['wikis'] = Wiki::published()->with('user')->with('category')->orderBy('id', 'desc')->paginate(8);
        }

        return view('frontend.wiki.render.wikis')->with($data);
    }

    public function sortByCategory($id)
    {
        if ($id !== 'all') {
            $data['wikis'] = Wiki::published()->with('user')->with('category')->where('wiki_category_id', $id)->orderBy('id', 'desc')->paginate(8);
        } else {
            $data['wikis'] = Wiki::published()->with('user')->with('category')->orderBy('id', 'desc')->paginate(8);
        }

        return view('frontend.wiki.render.wikis')->with($data);
    }

    public function searchWiki(string $query)
    {
        $wikis = [];

        if ($query) {
            $wikis = Wiki::search($query)->orderBy('id', 'desc')->paginate(8);
        } else {
            $wikis = Wiki::published()->with('user')->with('category')->orderBy('id', 'desc')->paginate(8);
        }

        return view('frontend.wiki.render.wikis', compact('wikis'));
    }
}
