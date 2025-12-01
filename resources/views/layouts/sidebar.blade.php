@php
    $parents = $menus->whereNull('parent_id');
    function childrenOf($menus, $parentId) {
        return $menus->where('parent_id', $parentId);
    }
@endphp

<div class="notion-sidebar p-2">

    {{-- Section Example --}}
    <div class="sidebar-section">
        <span class="section-badge bg-purple">D</span>
        <span class="section-title">Ditto System</span>
    </div>

    {{-- Menu Loop --}}
    @foreach ($parents as $parent)
        @php
            $childs = childrenOf($menus, $parent->id);
            $menuId = "menu" . $parent->id;
        @endphp

        {{-- Parent --}}
        <a
            class="menu-item d-flex justify-content-between align-items-center"
            @if ($childs->count() > 0)
                data-bs-toggle="collapse"
                href="#{{ $menuId }}"
            @else
                href="{{ $parent->route ? route($parent->route) : '#' }}"
            @endif
        >
            <div class="d-flex align-items-center">
                {{-- FOLDER ICON --}}
                <i class="bi bi-folder sidebar-folder-icon me-2"></i>
                <span class="menu-main-text">{{ $parent->title }}</span>
            </div>

            @if ($childs->count() > 0)
                <i class="bi bi-chevron-right toggle-arrow"></i>
            @endif
        </a>

        {{-- Children --}}
        @if ($childs->count() > 0)
            <div class="collapse ms-3" id="{{ $menuId }}">
                @foreach ($childs as $child)
                    @php
                        $href = '#';
                        if ($child->route && Route::has($child->route)) {
                            $href = route($child->route);
                        }
                    @endphp

                    <a href="{{ $href }}" class="submenu-item d-flex align-items-center">
                        <i class="bi bi-dot nested-icon-small"></i>
                        {{ $child->title }}
                    </a>

                @endforeach
            </div>
        @endif
    @endforeach

</div>

<style>
    /* Sidebar container */
.notion-sidebar {
    width: 250px;
    border-right: 1px solid #e5e7eb;
    background: #ffffff;
    height: 100vh;
    overflow-y: auto;
    font-family: "Inter", sans-serif;
}

/* -------- Section -------- */
.sidebar-section {
    display: flex;
    align-items: center;
    padding: 6px 8px;
    margin-bottom: 8px;
}

.section-badge {
    padding: 6px 10px;
    border-radius: 8px;
    font-size: 14px;
    font-weight: bold;
    color: white;
}

.bg-purple { background: #8b5cf6; }

.section-title {
    margin-left: 10px;
    font-weight: 600;
    color: #374151;
}

/* -------- Parent Menu -------- */
.menu-item {
    text-decoration: none !important;
    color: #1e3a8a;  /* เมนูหลักสีฟ้าเข้ม */
    padding: 8px 10px;
    border-radius: 6px;
    transition: 0.2s;
}

.menu-item:hover {
    background: #e0ecfd; /* ฟ้าอ่อน */
}

/* Folder icon */
.sidebar-folder-icon {
    color: #111 !important; /* ให้เป็นสีดำตามต้องการ */
    font-size: 16px;
}

/* Remove underline */
.menu-main-text,
.submenu-item {
    text-decoration: none !important;
}

/* Rotation arrow */
.toggle-arrow {
    color: #9ca3af;
    transition: transform 0.2s ease;
}

/* -------- Submenu -------- */
.submenu-item {
    text-decoration: none !important;
    color: #6b7280;
    padding: 6px 12px;
    border-radius: 6px;
    display: block;
}

.submenu-item:hover {
    background: #f3f4f6;
    color: #374151;
}

/* Submenu bullet */
.nested-icon-small {
    font-size: 12px;
    margin-right: 6px;
    color: #6b7280;
}

</style>
