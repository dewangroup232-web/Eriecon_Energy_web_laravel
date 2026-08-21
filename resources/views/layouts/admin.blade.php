<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin') | Eirecon Energy</title>
    @stack('vendor-styles')
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
</head>
<body>
    <div class="admin-shell">
        <aside class="admin-sidebar">
            <a class="admin-brand" href="{{ route('admin.dashboard') }}">
                <img src="{{ asset('assets/img/logo_aa.png') }}" alt="Eirecon Energy Company">
                <span>Content Admin</span>
            </a>
            <nav class="admin-nav" aria-label="Admin navigation">
                <a class="{{ request()->routeIs('admin.dashboard') ? 'is-active' : '' }}" href="{{ route('admin.dashboard') }}">
                    <span class="admin-nav-icon">01</span> Dashboard
                </a>
                <a class="{{ request()->routeIs('admin.banners.*') ? 'is-active' : '' }}" href="{{ route('admin.banners.index') }}">
                    <span class="admin-nav-icon">02</span> Hero banners
                </a>
                {{-- <a class="{{ request()->routeIs('admin.blogs.*') ? 'is-active' : '' }}" href="{{ route('admin.blogs.index') }}">
                    <span class="admin-nav-icon">03</span> Blog posts
                </a> --}}
            </nav>
            <div class="admin-sidebar-footer">Eirecon Energy CMS<br>Laravel {{ app()->version() }}</div>
        </aside>
        <main class="admin-main">
            <header class="admin-topbar">
                <h2 class="admin-topbar-title">@yield('page_label', 'Content Management')</h2>
                <div class="admin-user">
                    <div class="admin-user-mark">{{ strtoupper(substr(auth()->user()->name, 0, 1)) }}</div>
                    <div><strong>{{ auth()->user()->name }}</strong><span>{{ auth()->user()->email }}</span></div>
                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <button class="admin-logout" type="submit">Log out</button>
                    </form>
                </div>
            </header>
            <div class="admin-content">
                @if(session('success'))
                    <div class="admin-alert admin-alert--success" role="status">{{ session('success') }}</div>
                @endif
                @if($errors->any())
                    <div class="admin-alert admin-alert--error" role="alert">
                        <strong>Please correct the following:</strong>
                        <ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
                    </div>
                @endif
                @yield('content')
            </div>
        </main>
    </div>
    @stack('scripts')
</body>
</html>
