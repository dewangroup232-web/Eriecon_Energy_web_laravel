@extends('layouts.app')

@section('title', 'Eirecon Energy Journal')
@section('meta_description', 'Engineering perspectives, project intelligence, and practical thinking from Eirecon Energy Company.')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/blog-premium.css') }}">
@endpush

@section('content')
    <main class="journal-page">
        <section class="journal-hero" aria-labelledby="journal-title">
            <div class="journal-grid-texture" aria-hidden="true"></div>
            <div class="container">
                <div class="journal-hero-layout">
                    <div class="journal-hero-copy">
                        <p class="journal-kicker">Eirecon Energy Journal</p>
                        <h1 id="journal-title">Ideas that move <span>industry forward.</span></h1>
                        <p>Engineering perspectives, project intelligence, and practical thinking for the people building safer, smarter, and more resilient energy infrastructure.</p>
                    </div>
                    <aside class="journal-hero-note" aria-label="Journal editorial focus">
                        <strong>Field-led insight</strong>
                        <p>Clear thinking shaped by engineering discipline, complex project environments, and the realities of industrial delivery.</p>
                    </aside>
                </div>
            </div>
        </section>

        <section class="journal-index" aria-labelledby="latest-insights-title">
            <div class="container">
                <div class="journal-index-heading">
                    <div>
                        <p class="journal-section-kicker">Latest intelligence</p>
                        <h2 id="latest-insights-title">Perspectives from across the project lifecycle.</h2>
                    </div>
                    <nav class="journal-filters" aria-label="Article categories">
                        <a class="journal-filter is-active" href="{{ route('blog.index') }}" aria-current="page">All insights</a>
                    </nav>
                </div>

                @if($featuredPost)
                    <article class="journal-featured">
                        <a class="journal-featured-media" href="{{ $featuredPost->public_url }}" aria-label="Read {{ $featuredPost->title }}">
                            <img src="{{ $featuredPost->featured_image_url }}" alt="{{ $featuredPost->image_alt ?: $featuredPost->title }}" loading="eager">
                        </a>
                        <div class="journal-featured-content">
                            <span class="journal-category">Featured · {{ $featuredPost->category }}</span>
                            <h3>{{ $featuredPost->title }}</h3>
                            <p>{{ $featuredPost->excerpt }}</p>
                            <div class="journal-meta">
                                <span><i class="far fa-calendar" aria-hidden="true"></i> {{ $featuredPost->published_at->format('d F Y') }}</span>
                                <span><i class="far fa-clock" aria-hidden="true"></i> {{ $featuredPost->reading_minutes }} min read</span>
                            </div>
                            <a class="journal-read-link" href="{{ $featuredPost->public_url }}">Read the insight <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </article>
                @endif

                <div class="journal-card-grid" id="all-articles">
                    @forelse($posts as $post)
                        <article class="journal-card">
                            <a class="journal-card-media" href="{{ $post->public_url }}">
                                <img src="{{ $post->featured_image_url }}" alt="{{ $post->image_alt ?: $post->title }}" loading="lazy">
                            </a>
                            <div class="journal-card-content">
                                <span class="journal-category">{{ $post->category }}</span>
                                <h3><a href="{{ $post->public_url }}">{{ $post->title }}</a></h3>
                                <p>{{ $post->excerpt }}</p>
                                <div class="journal-meta">
                                    <span>{{ $post->published_at->format('d F Y') }}</span>
                                    <span>{{ $post->reading_minutes }} min read</span>
                                </div>
                            </div>
                        </article>
                    @empty
                        @unless($featuredPost)
                            <p>No published insights are available yet.</p>
                        @endunless
                    @endforelse
                </div>
                @if($posts->hasPages())<div style="margin-top:48px">{{ $posts->links() }}</div>@endif
            </div>
        </section>

        <section class="journal-cta" aria-labelledby="journal-cta-title">
            <div class="container">
                <div class="journal-cta-inner">
                    <h2 id="journal-cta-title">Have a complex project challenge worth discussing?</h2>
                    <a class="journal-cta-button" href="{{ url('/contact.html') }}">Start a conversation <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </section>
    </main>
@endsection
