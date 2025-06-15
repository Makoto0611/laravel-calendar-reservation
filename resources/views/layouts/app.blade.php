<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title', 'カレンダー予Larave+約ポートフォリオ')</title>
    
    <!-- Bootstrap CSS & Custom Sass -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <!-- ナビゲーション -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                📅 Laravel + bootstrap
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">ホーム</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">プロフィール</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#calendar">カレンダー</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- メインコンテンツ -->
    <main>
        @yield('content')
    </main>

    <!-- フッター -->
    <footer class="bg-light py-4 mt-5">
        <div class="container text-center">
            <p class="mb-0">&copy; 2025 Laravel + Bootstrap ポートフォリオ</p>
        </div>
    </footer>
</body>
</html>