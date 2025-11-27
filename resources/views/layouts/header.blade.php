<nav class="navbar navbar-light bg-white border-bottom px-3 d-flex justify-content-between align-items-center"
     style="height: 58px;">
    
    <div class="d-flex align-items-center gap-2">
        <button class="btn btn-light d-md-none btn-toggle-sidebar">
            <i class="bi bi-list fs-4"></i>
        </button>

        <h5 class="mb-0 fw-semibold text-dark">@yield('title')</h5>
    </div>

    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-decoration-none"
           data-bs-toggle="dropdown">

            <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name ?? 'User') }}"
                 class="rounded-circle shadow-sm"
                 width="34" height="34">

            <span class="ms-2 text-dark fw-medium d-none d-md-inline">
                {{ Auth::user()->name ?? 'User' }}
            </span>

            <i class="bi bi-chevron-down ms-1 text-muted small"></i>
        </a>

        <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0 rounded-3">
            <li>
                <a class="dropdown-item" href="/profile">
                    <i class="bi bi-person me-2"></i> โปรไฟล์ของฉัน
                </a>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li>
                <a class="dropdown-item text-danger"
                   href="#"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="bi bi-box-arrow-right me-2"></i> ออกจากระบบ
                </a>
            </li>
        </ul>
    </div>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</nav>
