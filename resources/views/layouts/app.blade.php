<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Quiz Proyek')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    @include('partials.header')

    <main class="container main-content fade-in">
        @yield('content')
    </main>

    @include('partials.footer')

    <script>
        const header = document.getElementById('mainHeader');
        const dock = document.getElementById('floatingDock');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 60) {
                header.classList.add('header-hidden');
                dock.classList.add('dock-visible');
            } else {
                header.classList.remove('header-hidden');
                dock.classList.remove('dock-visible');
            }
        });
    </script>
</body>
</html>