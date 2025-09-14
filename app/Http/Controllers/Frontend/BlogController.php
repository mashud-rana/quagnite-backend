<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogTag;
use App\Models\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        set_page_meta('Our blogs');
        $blogs = Blog::published()->with('category', 'user')->latest()->paginate(3);
        $bootcampBlogs = Blog::published()->with('category', 'user')->latest()->inRandomOrder()->paginate(3);
        $employeeBlogs = Blog::published()->with('category', 'user')->latest()->inRandomOrder()->paginate(3);
        $blogCategories = BlogCategory::all();
        $blogTags = Tag::all();

        return view('frontend.blog.index', [
            'blogs' => $blogs,
            'bootcampBlogs' => $bootcampBlogs,
            'employeeBlogs' => $employeeBlogs,
            'blogCategories' => $blogCategories,
            'blogTags' => $blogTags,
        ]);
    }

    public function blogDetails($slug)
    {
        set_page_meta('Blog Details');
        try {

            // Fetch the blog by slug
            $blog = Blog::with(['category', 'user'])->where('slug', $slug)->firstOrFail();

            // Fetch related blogs
            $relatedBlogs = Blog::where('blog_category_id', $blog->category->id)
                ->where('id', '<>', $blog->id)
                ->with(['category', 'user'])
                ->latest()
                ->paginate(3);

            // Generate social share buttons
            $buttons = \Share::page(route('blog.details', $slug), $blog->title)
                ->facebook()
                ->twitter()
                ->linkedin()
                ->reddit();

            return view('frontend.blog.details', [
                'blog' => $blog,
                'blogTags' => Tag::all(),
                'relatedBlogs' => $relatedBlogs,
                'buttons' => $buttons,
            ]);
        } catch (\Exception $e) {
            log_error($e);
            abort(404, 'Blog not found');
        }
    }

    public function storeComment(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'comment' => 'required',
            'blog_id' => 'required',
        ]);

        $blog = Blog::findOrFail($request->blog_id);

        $blog->comments()->create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'email' => $request->email,
            'comment' => $request->comment,
        ]);

        record_updated_flash('Comment submitted Successfully!');

        return back();
    }

    public function searchBlog(string $query)
    {
        $blogs = [];

        if ($query) {
            $blogs = Blog::search($query)->orderBy('id', 'desc')->paginate(3);
        } else {
            $blogs = Blog::orderBy('id', 'desc')->paginate(3);
        }

        return view('frontend.blog.render.blog-list', compact('blogs'));
    }

    public function searchBlogByCategory(string $id)
    {
        $blogs = [];

        if ($id !== 'all') {
            $blogs = Blog::where('blog_category_id', $id)->with(['user', 'category'])->latest()->paginate(3);
        } else {
            $blogs = Blog::orderBy('id', 'desc')->with(['user', 'category'])->paginate(3);
        }

        return view('frontend.blog.render.blog-list', compact('blogs'));
    }

    public function searchBlogByTag(string $id)
    {
        $blogs = [];

        //
        if ($id !== 'all') {
            $ids = BlogTag::select('blog_id')
                ->where('tag_id', $id)
                ->pluck('blog_id');
            $blogs = Blog::whereIn('id', $ids)->latest()->paginate(3);
        }

        if ($id === 'all') {
            $blogs = Blog::orderBy('id', 'desc')->paginate(3);
        }

        return view('frontend.blog.render.blog-list', compact('blogs'));
    }
}
