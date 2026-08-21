<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class BlogPostController extends Controller
{
    public function index(Request $request): View
    {
        $posts = BlogPost::query()
            ->when($request->filled('status'), fn ($query) => $query->where('status', $request->status))
            ->latest('published_at')->latest()->paginate(12)->withQueryString();

        return view('admin.blogs.index', compact('posts'));
    }

    public function create(): View
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validated($request, null, true);
        $data['featured_image'] = $request->file('featured_image')->store('blogs', 'public');
        $this->normalize($request, $data);
        $post = BlogPost::create($data);
        $this->enforceSingleFeatured($post);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog post created successfully.');
    }

    public function edit(BlogPost $blog): View
    {
        return view('admin.blogs.edit', ['post' => $blog]);
    }

    public function update(Request $request, BlogPost $blog): RedirectResponse
    {
        $data = $this->validated($request, $blog);
        if ($request->hasFile('featured_image')) {
            $this->deleteUpload($blog->featured_image);
            $data['featured_image'] = $request->file('featured_image')->store('blogs', 'public');
        }
        $this->normalize($request, $data);
        $blog->update($data);
        $this->enforceSingleFeatured($blog);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog post updated successfully.');
    }

    public function destroy(BlogPost $blog): RedirectResponse
    {
        $this->deleteUpload($blog->featured_image);
        $blog->delete();

        return back()->with('success', 'Blog post deleted successfully.');
    }

    private function validated(Request $request, ?BlogPost $post = null, bool $imageRequired = false): array
    {
        return $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'alpha_dash', 'max:255', Rule::unique('blog_posts')->ignore($post)],
            'excerpt' => ['required', 'string', 'max:1000'],
            'content' => ['required', 'string'],
            'category' => ['required', 'string', 'max:100'],
            'author_name' => ['required', 'string', 'max:150'],
            'featured_image' => [$imageRequired ? 'required' : 'nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:10240'],
            'image_alt' => ['nullable', 'string', 'max:255'],
            'reading_minutes' => ['required', 'integer', 'min:1', 'max:120'],
            'published_at' => ['nullable', 'date'],
            'status' => ['required', Rule::in(['draft', 'published'])],
            'seo_title' => ['nullable', 'string', 'max:255'],
            'seo_description' => ['nullable', 'string', 'max:500'],
        ]);
    }

    private function normalize(Request $request, array &$data): void
    {
        $data['is_featured'] = $request->boolean('is_featured');
        if ($data['status'] === 'published' && empty($data['published_at'])) {
            $data['published_at'] = now();
        }
    }

    private function enforceSingleFeatured(BlogPost $post): void
    {
        if ($post->is_featured) {
            BlogPost::whereKeyNot($post->id)->update(['is_featured' => false]);
        }
    }

    private function deleteUpload(string $path): void
    {
        if (! str_starts_with($path, 'assets/')) {
            Storage::disk('public')->delete($path);
        }
    }
}
