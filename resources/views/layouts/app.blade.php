<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('portfolio.name', 'Alex Morgan') }} — Portfolio</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;0,900;1,400&family=DM+Sans:wght@300;400;500&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">

</head>
<body>

    <!-- Cursor -->
    <div class="cursor" id="cursor"></div>
    <div class="cursor-trail" id="cursorTrail"></div>

    <!-- Nav -->
    <nav class="nav" id="nav">
        <a href="#hero" class="nav-logo">KS<span>.</span></a>
        <ul class="nav-links">
            <li><a href="#about">About</a></li>
            <li><a href="#work">Work</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <button class="nav-toggle" id="navToggle" aria-label="Toggle Menu">
            <span></span><span></span>
        </button>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="footer">
        <p>© {{ date('Y') }} {{ config('portfolio.name', 'Kalaiselvi S') }}. Crafted with care.</p>
        <div class="footer-links">
            @foreach(config('portfolio.social', []) as $name => $url)
                <a href="{{ $url }}" target="_blank" rel="noopener">{{ $name }}</a>
            @endforeach
        </div>
    </footer>

    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
    <script src="{{ asset('js/portfolio.js') }}"></script>
</body>
</html>
