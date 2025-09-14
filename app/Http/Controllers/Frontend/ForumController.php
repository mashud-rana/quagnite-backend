<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ForumCategory;
use App\Models\ForumPost;
use App\Models\ForumPostComment;
use App\Models\ForumVote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ForumController extends Controller
{
    public function index()
    {
        set_page_meta('Forum');
        $data['forumCategories'] = ForumCategory::active()->get();

        $data['forumPosts'] = ForumPost::active()->with('user', 'forumCategory')->withCount('comments')->withSum('votes', 'vote')->orderBy('id', 'desc')->paginate(10);

        return view('frontend.forum.index')->with($data);
    }

    public function askQuestion()
    {
        if (! Auth::check()) {
            return redirect()->route('auth.login');
        }

        set_page_meta('Forum Ask Question');
        $data['forumCategories'] = ForumCategory::active()->get();

        return view('frontend.forum.ask-question')->with($data);
    }

    public function questionStore(Request $request)
    {

        if (! Auth::id()) {
            return redirect()->back();
        }

        $request->validate([
            'title' => 'required',
            'forum_category_id' => 'required',
            'description' => 'required',
        ]);

        $post = new ForumPost();
        $post->title = $request->title;
        $post->user_id = Auth::id();
        $post->forum_category_id = $request->forum_category_id;
        $post->description = $request->description;
        $post->save();

        return redirect()->route('forum.forumPostDetails', $post->uuid);
    }

    public function forumPostDetails($uuid)
    {
        set_page_meta('Forum Details');
        $data['forumPost'] = ForumPost::where('uuid', $uuid)->firstOrFail();
        $data['forumPost']->seen = ++$data['forumPost']->seen;
        $data['forumPost']->save();

        $data['forumPostComments'] = $data['forumPost']->comments()->active()->with('user', 'commentReplies.user')->get();

        $data['voteCount'] = $this->getForumVoteCount($data['forumPost']->id);

        return view('frontend.forum.forum_details')->with($data);
    }

    public function forumPostCommentStore(Request $request)
    {
        if (! Auth::id()) {
            return redirect()->back();
        }

        $comment = new ForumPostComment();
        $comment->forum_post_id = $request->forum_post_id;
        $comment->user_id = Auth::id();
        $comment->comment = $request->comment;
        $comment->status = 1;
        $comment->save();

        return redirect()->back();
    }

    public function forumPostCommentReplyStore(Request $request)
    {
        if (! Auth::id()) {
            return redirect()->back();
        }

        $comment = new ForumPostComment();
        $comment->forum_post_id = $request->forum_post_id;
        $comment->user_id = Auth::id();
        $comment->comment = $request->comment;
        $comment->parent_id = $request->parent_id;
        $comment->status = 1;
        $comment->save();

        return redirect()->back();
    }

    public function sortByOldNew(string $type)
    {
        if ($type === 'old') {
            $data['forumPosts'] = ForumPost::active()->with('user')->withCount('comments')->orderBy('id', 'asc')->paginate(10);
        } else {
            $data['forumPosts'] = ForumPost::active()->with('user')->withCount('comments')->orderBy('id', 'desc')->paginate(10);
        }

        return view('frontend.forum.render.forum-posts')->with($data);
    }

    public function sortByCategory($id)
    {
        if ($id !== 'all') {
            $data['forumPosts'] = ForumPost::active()->with('user')->where('forum_category_id', $id)->withCount('comments')->orderBy('id', 'ASC')->paginate(10);
        } else {
            $data['forumPosts'] = ForumPost::active()->with('user')->withCount('comments')->latest()->paginate(10);
        }

        return view('frontend.forum.render.forum-posts')->with($data);
    }

    public function searchForum(string $query)
    {
        if ($query) {
            $data['forumPosts'] = ForumPost::search($query)->where('status', 1)->orderBy('id', 'desc')->paginate(10);
        } else {
            $data['forumPosts'] = ForumPost::active()->with('user')->withCount('comments')->orderBy('id', 'desc')->paginate(10);
        }

        return view('frontend.forum.render.forum-posts')->with($data);
    }

    public function placeVote(Request $request)
    {

        $request->validate(
            [
                'forum_id' => 'required',
                'vote' => 'required|in:1,-1',
            ]
        );

        $data['user_id'] = Auth::user()->id;
        $data['forum_post_id'] = $request->forum_id;
        $data['vote'] = $request->vote;

        $forumVote = ForumVote::where('user_id', $data['user_id'])->where('forum_post_id', $data['forum_post_id'])->first();

        if ($forumVote) {

            $this->insertVote($forumVote, $data);

            return $this->getForumVoteCount($data['forum_post_id']);
        }

        if (! $forumVote) {

            ForumVote::create($data);

            return $this->getForumVoteCount($data['forum_post_id']);
        }
    }

    public function insertVote(ForumVote $forumVote, array $data): void
    {
        if ($forumVote->vote !== $data['vote']) {
            $forumVote->update([
                'vote' => $data['vote'],
            ]);
        }
    }

    public function getForumVoteCount($forumId)
    {
        return ForumVote::where('forum_post_id', $forumId)->sum('vote');
    }
}
