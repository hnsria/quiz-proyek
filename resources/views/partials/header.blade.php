<!-- Header Utama (Menghilang saat di-scroll ke bawah) -->
<header class="navbar" id="mainHeader">
    <div class="container navbar-inner">
        <a href="{{ route('home') }}" class="brand-logo">quiz-proyek</a>
        <nav class="nav-links">
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Welcome</a>
            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">Tentang Saya</a>
            <a href="{{ route('gallery') }}" class="{{ request()->routeIs('gallery') ? 'active' : '' }}">Galeri</a>
        </nav>
    </div>
</header>

<!-- Floating Icon Dock di Kanan (Muncul saat header menghilang) -->
<aside class="floating-dock" id="floatingDock" aria-label="Navigasi Cepat">
    <a href="{{ route('home') }}" class="dock-item {{ request()->routeIs('home') ? 'active' : '' }}" data-label="Welcome">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
            <polyline points="9 22 9 12 15 12 15 22"></polyline>
        </svg>
    </a>
    <a href="{{ route('about') }}" class="dock-item {{ request()->routeIs('about') ? 'active' : '' }}" data-label="Tentang Saya">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
            <circle cx="12" cy="7" r="4"></circle>
        </svg>
    </a>
    <a href="{{ route('gallery') }}" class="dock-item {{ request()->routeIs('gallery') ? 'active' : '' }}" data-label="Galeri">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
            <circle cx="8.5" cy="8.5" r="1.5"></circle>
            <polyline points="21 15 16 10 5 21"></polyline>
        </svg>
    </a>
</aside>