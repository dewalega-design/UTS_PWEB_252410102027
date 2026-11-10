<nav class="navbar">
    <h2>🍃 Plantlog</h2>
    <ul class="nav-links">
        <li><a href="{{ route('dashboard', ['username' => request('username')]) }}">Dashboard</a></li>
        <li><a href="{{ route('pengelolaan', ['username' => request('username')]) }}">Pengelolaan</a></li>
        <li><a href="{{ route('profile', ['username' => request('username')]) }}">Profil</a></li>
        <li><a href="{{ route('login') }}" class="btn-logout">Logout</a></li>
    </ul>
</nav>