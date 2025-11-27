<nav class="navbar border-bottom bg-white px-3 d-flex justify-content-between">
    <h5 class="fw-bold">@yield('title')</h5>

    <div class="d-flex align-items-center gap-3">
        <span class="text-muted">
            Hello, {{ Auth::user()->name ?? 'User' }}
        </span>

        <a href="#" class="text-danger fw-semibold"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="bi bi-box-arrow-right me-1"></i> Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</nav>
