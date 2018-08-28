<?php

namespace App\Http\Controllers;

use App\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends PrismicController
{
    public function index()
    {
        $query = BlogPost::orderBy('first_publication_date');

        if (!empty($tag = request('tag'))) {
            $query->whereTag($tag);
        }

        $blogPosts = $query->paginate(4);

        return view('blog-post.index', compact('blogPosts'));
    }

    public function show(Request $request)
    {
        $blogPost = BlogPost::with('relatedBlogPosts')->find($request->slug);

        if (!empty($blogPost)) {
            return view('blog-post.show', compact('blogPost'));
        }

        abort(404);
    }
}
