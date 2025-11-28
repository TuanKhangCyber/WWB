<header class="main-header">
    <div class="logo-area">
        <div class="logo-symbol">W</div>
        <div class="logo-text">
            <span class="logo-title">TruyenWWB</span>
            <span class="logo-subtitle">Giới Tu Tiên & Huyền Huyễn</span>
        </div>
    </div>

    <nav class="main-nav">
            {{-- Thanh Search --}}
        <form action="{{ url('/search') }}" method="GET" class="nav-search">
            <input
                type="text"
                name="q"
                class="nav-search-input"
                placeholder="Tìm truyện, tác giả..."
            >
            <button type="submit" class="nav-search-btn" aria-label="Tìm kiếm">
                🔍
            </button>
        </form>
        <a href="{{ route('home') }}" class="nav-btn">Trang Chủ</a>
        <a href="{{ route('products') }}" class="nav-btn">Truyện</a>
        <a href="{{ route('tuvi') }}" class="nav-btn">Tu Vi</a>

        <div class="nav-auth">
            {{-- Login --}}
            <a href="/login" class="nav-auth-btn" title="Đăng nhập">
                <span class="nav-auth-icon">👤</span>
                <span class="nav-auth-text">Login</span>
            </a>

            {{-- Register --}}
            <a href="/register" class="nav-auth-btn" title="Đăng ký">
                <span class="nav-auth-icon">📜</span>
                <span class="nav-auth-text">Register</span>
            </a>

            {{-- Logout (sau này nên dùng form POST) --}}
            <a href="#" class="nav-auth-btn nav-auth-btn--danger" title="Đăng xuất">
                <span class="nav-auth-icon">🚪</span>
                <span class="nav-auth-text">Logout</span>
            </a>
        </div>
    </nav>
</header>
