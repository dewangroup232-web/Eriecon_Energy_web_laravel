@extends('layouts.admin')

@section('title', 'Dashboard')
@section('page_label', 'Overview')

@section('content')
    <div class="admin-page-head">
        <div>
            <p class="admin-eyebrow">Website content</p>
            <h1>Good to see you, {{ auth()->user()->name }}.</h1>
            <p>Control the homepage hero rotation and the complete Eirecon Energy journal from one place.</p>
        </div>
        {{-- <a class="admin-button" href="{{ route('admin.blogs.create') }}">Create blog post</a> --}}
    </div>

    <section class="admin-stat-grid" aria-label="Content statistics">
        <article class="admin-stat"><span>Total banners</span><strong>{{ $bannerCount }}</strong></article>
        <article class="admin-stat"><span>Active banners</span><strong>{{ $activeBannerCount }}</strong></article>
        {{-- <article class="admin-stat"><span>Total posts</span><strong>{{ $postCount }}</strong></article> --}}
        {{-- <article class="admin-stat"><span>Published posts</span><strong>{{ $publishedPostCount }}</strong></article> --}}
    </section>

    {{--
    <section class="admin-card">
        <div class="admin-card-head">
            <h2>Recent blog activity</h2>
            <a class="admin-button admin-button--secondary admin-button--small" href="{{ route('admin.blogs.index') }}">View all posts</a>
        </div>
        <div class="admin-table-wrap">
            <table class="admin-table">
                <thead><tr><th>Article</th><th>Status</th><th>Published</th><th></th></tr></thead>
                <tbody>
                @forelse($recentPosts as $post)
                    <tr>
                        <td class="admin-table-title"><strong>{{ $post->title }}</strong><span>{{ $post->category }}</span></td>
                        <td><span class="admin-badge admin-badge--{{ $post->status }}">{{ $post->status }}</span></td>
                        <td>{{ $post->published_at?->format('d M Y') ?? 'Not scheduled' }}</td>
                        <td><a class="admin-button admin-button--secondary admin-button--small" href="{{ route('admin.blogs.edit', $post) }}">Edit</a></td>
                    </tr>
                @empty
                    <tr><td colspan="4" class="admin-empty">No blog posts have been created yet.</td></tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </section>
    --}}
@endsection
