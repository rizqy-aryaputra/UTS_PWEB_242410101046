<nav style="background:#2c2c2c; padding:16px 0; border-bottom:1px solid #e6dfd6;">
    <div style="width:90%; max-width:1000px; margin:auto; display:grid; grid-template-columns: 1fr auto 1fr; align-items:center;">

        <div>
            <h3 style="color:#d4c4a8; margin:0; font-weight:500; letter-spacing:1px;">
                Archive
            </h3>
        </div>

        <div style="display:flex; justify-content:center; gap:14px;">
            @if($username)
                <a href="{{ route('dashboard.page', ['username' => $username]) }}" class="nav-link">Home</a>
                <a href="{{ route('pengelolaan', ['username' => $username]) }}" class="nav-link">Inventory</a>
                <a href="{{ route('profile', ['username' => $username]) }}" class="nav-link">Profile</a>
            @else
                <a href="{{ route('login') }}" class="nav-link">Home</a>
            @endif
        </div>

        <div style="display:flex; justify-content:flex-end; align-items:center; gap:12px;">
            @if($username)
                <span style="color:#d4c4a8; font-size:13px;">
                    {{ $username }}
                </span>

                <a href="{{ route('logout') }}" class="nav-link">Logout</a>
            @else
                <a href="{{ route('login') }}" class="nav-link">Login</a>
            @endif
        </div>

    </div>
</nav>