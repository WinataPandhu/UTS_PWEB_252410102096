@props(['username' => '', 'active' => ''])

<style>
    .navbar {
        background: var(--accent);
        box-shadow: 0 2px 12px rgba(185,28,28,.35);
        position: sticky;
        top: 0;
        z-index: 10;
    }
    .navbar-inner {
        max-width: 1080px;
        margin: 0 auto;
        padding: 14px 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 10px;
    }
    .brand { font-size: 1.4rem; font-weight: 800; color: #ffffff; }
    .nav-links { display: flex; gap: 6px; flex-wrap: wrap; align-items: center; }
    .nav-links a {
        padding: 8px 16px;
        border-radius: 10px;
        color: rgba(255,255,255,.88);
        font-weight: 600;
        font-size: .95rem;
        transition: background .15s, color .15s;
    }
    .nav-links a:hover { background: rgba(255,255,255,.18); color: #ffffff; }
    .nav-links a.active { background: #ffffff; color: var(--accent); }
    .nav-links a.logout { border: 1px solid rgba(255,255,255,.6); }
    @media (max-width: 600px) {
        .navbar-inner { justify-content: center; }
        .nav-links a { padding: 7px 11px; font-size: .88rem; }
    }
</style>

<nav class="navbar">
    <div class="navbar-inner">
        <a class="brand" href="{{ route('dashboard', ['username' => $username]) }}">WorkOut</a>
        <div class="nav-links">
            <a href="{{ route('dashboard', ['username' => $username]) }}" class="{{ $active === 'dashboard' ? 'active' : '' }}">Dashboard</a>
            <a href="{{ route('pengelolaan', ['username' => $username]) }}" class="{{ $active === 'pengelolaan' ? 'active' : '' }}">Jadwal</a>
            <a href="{{ route('profile', ['username' => $username]) }}" class="{{ $active === 'profile' ? 'active' : '' }}">Profil</a>
            <a href="{{ route('login') }}" class="logout">Keluar</a>
        </div>
    </div>
</nav>
