@extends('layouts.admin')

@section('title', 'Blog Posts')
@section('page_label', 'Eirecon Journal')

@section('content')
    <div class="admin-page-head">
        <div><p class="admin-eyebrow">Journal publishing</p><h1>Blog posts</h1><p>Create drafts, schedule publishing, select the featured insight, and manage all article details.</p></div>
        <a class="admin-button" href="{{ route('admin.blogs.create') }}">Add blog post</a>
    </div>
    <form class="admin-filter" method="GET">
        <select class="admin-select" name="status" style="max-width:220px" onchange="this.form.submit()">
            <option value="">All statuses</option>
            <option value="published" @selected(request('status') === 'published')>Published</option>
            <option value="draft" @selected(request('status') === 'draft')>Draft</option>
        </select>
    </form>
    <section class="admin-card">
        <div class="admin-table-wrap">
            <table class="admin-table">
                <thead><tr><th>Image</th><th>Article</th><th>Status</th><th>Published</th><th>Actions</th></tr></thead>
                <tbody>
                @forelse($posts as $post)
                    <tr>
                        <td><img class="admin-table-media" src="{{ $post->featured_image_url }}" alt=""></td>
                        <td class="admin-table-title">
                            <strong>{{ $post->title }}</strong>
                            <span>{{ $post->category }} · {{ $post->reading_minutes }} min read @if($post->is_featured) · Featured @endif</span>
                        </td>
                        <td><span class="admin-badge admin-badge--{{ $post->status }}">{{ $post->status }}</span></td>
                        <td>{{ $post->published_at?->format('d M Y, H:i') ?? 'Not scheduled' }}</td>
                        <td>
                            <div class="admin-actions">
                                @if($post->status === 'published')<a class="admin-button admin-button--secondary admin-button--small" href="{{ $post->public_url }}" target="_blank">View</a>@endif
                                <a class="admin-button admin-button--secondary admin-button--small" href="{{ route('admin.blogs.edit', $post) }}">Edit</a>
                                <form method="POST" action="{{ route('admin.blogs.destroy', $post) }}" onsubmit="return confirm('Delete this blog post?')">
                                    @csrf @method('DELETE')
                                    <button class="admin-button admin-button--danger admin-button--small" type="submit">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr><td class="admin-empty" colspan="5">No blog posts match this filter.</td></tr>
                @endforelse
                </tbody>
            </table>
        </div>
        @if($posts->hasPages())<div style="margin-top:24px">{{ $posts->links() }}</div>@endif
    </section>
@endsection
