@extends('layouts.app')

@section('title', ($post->seo_title ?: $post->title).' | Eirecon Energy')
@section('meta_description', $post->seo_description ?: $post->excerpt)

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/blog-premium.css') }}">
@endpush

@section('content')
    <main class="journal-page">
        <article>
            <header class="article-hero">
                <div class="journal-grid-texture" aria-hidden="true"></div>
                <div class="container">
                    <div class="article-hero-content">
                        <p class="article-kicker">{{ $post->category }} @if($post->is_featured) · Featured Insight @endif</p>
                        <h1>{{ $post->title }}</h1>
                        <p class="article-deck">{{ $post->excerpt }}</p>
                        <div class="journal-meta">
                            <span><i class="far fa-calendar" aria-hidden="true"></i> {{ $post->published_at->format('d F Y') }}</span>
                            <span><i class="far fa-clock" aria-hidden="true"></i> {{ $post->reading_minutes }} min read</span>
                            <span><i class="far fa-user" aria-hidden="true"></i> {{ $post->author_name }}</span>
                        </div>
                    </div>
                </div>
            </header>

            <div class="article-main">
                <div class="container">
                    <div class="article-layout">
                        <aside class="article-aside" aria-label="Article details">
                            <span class="article-aside-label">Insight details</span>
                            <nav>
                                <a href="#article-content">{{ $post->category }}</a>
                                <a href="#article-content">{{ $post->reading_minutes }} minute read</a>
                                <a href="#article-author">By {{ $post->author_name }}</a>
                            </nav>
                        </aside>
                        <div class="article-body" id="article-content">
                            <figure>
                                <div class="article-inline-image">
                                    <img src="{{ $post->featured_image_url }}" alt="{{ $post->image_alt ?: $post->title }}" loading="eager">
                                </div>
                            </figure>

                            {!! $post->content !!}

                            <div class="article-author" id="article-author">
                                <span class="article-author-mark" aria-hidden="true">{{ collect(explode(' ', $post->author_name))->map(fn($part) => substr($part, 0, 1))->take(2)->join('') }}</span>
                                <div>
                                    <strong>{{ $post->author_name }}</strong>
                                    <span>Eirecon Energy engineering, project delivery, and industry specialists.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        @if($relatedPosts->isNotEmpty())
            <section class="journal-related" aria-labelledby="related-title">
                <div class="container">
                    <p class="journal-section-kicker">Continue reading</p>
                    <h2 id="related-title">Related perspectives</h2>
                    <div class="related-grid">
                        @foreach($relatedPosts as $related)
                            <article class="related-card">
                                <a class="related-card-media" href="{{ $related->public_url }}"><img src="{{ $related->featured_image_url }}" alt="{{ $related->image_alt ?: $related->title }}" loading="lazy"></a>
                                <div class="related-card-content">
                                    <span class="journal-category">{{ $related->category }}</span>
                                    <h3><a href="{{ $related->public_url }}">{{ $related->title }}</a></h3>
                                    <div class="journal-meta"><span>{{ $related->reading_minutes }} min read</span></div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif

        <section class="journal-cta" aria-labelledby="article-cta-title">
            <div class="container">
                <div class="journal-cta-inner">
                    <h2 id="article-cta-title">Turn engineering clarity into stronger project delivery.</h2>
                    <a class="journal-cta-button" href="{{ url('/contact.html') }}">Talk to our team <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </section>
    </main>
@endsection
