<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login | Eirecon Energy</title>
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
</head>
<body class="admin-login-page">
    <main class="admin-login-card">
        <img class="admin-login-logo" src="{{ asset('assets/img/logo_aa.png') }}" alt="Eirecon Energy Company">
        <h1>Admin sign in</h1>
        <p>Manage homepage banners and publish Eirecon Energy journal content.</p>
        @if($errors->any())
            <div class="admin-alert admin-alert--error" role="alert">{{ $errors->first() }}</div>
        @endif
        <form method="POST" action="{{ route('admin.login.store') }}">
            @csrf
            <div class="admin-field">
                <label class="admin-label" for="email">Email address</label>
                <input class="admin-input" id="email" name="email" type="email" value="{{ old('email') }}" autocomplete="username" required autofocus>
            </div>
            <div class="admin-field">
                <label class="admin-label" for="password">Password</label>
                <input class="admin-input" id="password" name="password" type="password" autocomplete="current-password" required>
            </div>
            <label class="admin-check" style="margin-top:16px">
                <input type="checkbox" name="remember" value="1"> Keep me signed in
            </label>
            <button class="admin-button" type="submit">Sign in securely</button>
        </form>
    </main>
</body>
</html>
