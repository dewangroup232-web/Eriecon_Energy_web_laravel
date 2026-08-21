<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(): View
    {
        $featuredPost = BlogPost::published()->where('is_featured', true)->latest('published_at')->first()
            ?? BlogPost::published()->latest('published_at')->first();

        $posts = BlogPost::published()
            ->when($featuredPost, fn ($query) => $query->whereKeyNot($featuredPost->id))
            ->latest('published_at')->paginate(9);

        return view('blog', compact('featuredPost', 'posts'));
    }

    public function show(string $slug): View
    {
        $post = BlogPost::published()->where('slug', $slug)->firstOrFail();
        $relatedPosts = BlogPost::published()->whereKeyNot($post->id)
            ->where('category', $post->category)->latest('published_at')->take(3)->get();

        if ($relatedPosts->count() < 3) {
            $additional = BlogPost::published()->whereKeyNot($post->id)
                ->whereNotIn('id', $relatedPosts->pluck('id'))
                ->latest('published_at')->take(3 - $relatedPosts->count())->get();
            $relatedPosts = $relatedPosts->concat($additional);
        }

        return view('blog-single', compact('post', 'relatedPosts'));
    }

    public function legacy(): RedirectResponse
    {
        $post = BlogPost::published()->where('is_featured', true)->first()
            ?? BlogPost::published()->latest('published_at')->firstOrFail();

        return redirect()->route('blog.show', $post->slug);
    }
}
