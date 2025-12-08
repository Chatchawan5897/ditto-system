@php
    $parents = $menus->whereNull('parent_id');

    function childMenus($menus, $parentId)
    {
        return $menus->where('parent_id', $parentId);
    }
@endphp

<div class="cu-sidebar">

    <div class="cu-sidebar-header">
        <span class="cu-logo">D</span>
        <span class="cu-title">Ditto System</span>
    </div>

    @foreach ($parents as $parent)
        @php
            $children = childMenus($menus, $parent->id);
            $menuId = 'menu' . $parent->id;
        @endphp

        {{-- Parent --}}
        <div class="cu-parent">

            <div class="cu-parent-row d-flex justify-content-between align-items-center"
                data-bs-toggle="{{ $children->count() > 0 ? 'collapse' : '' }}"
                data-bs-target="{{ $children->count() > 0 ? '#'.$menuId : '' }}"
                style="cursor: pointer;">

                <div class="d-flex align-items-center">
                    <i class="cu-icon bi bi-folder-fill me-2"></i>
                    <a class="cu-parent-link"
                        href="{{ $parent->route && Route::has($parent->route) ? route($parent->route) : '#' }}">
                        {{ $parent->title }}
                    </a>
                </div>

                @if ($children->count() > 0)
                    <i class="cu-caret bi bi-chevron-right"></i>
                @endif

            </div>

            {{-- Child --}}
            @if ($children->count() > 0)
                <div class="collapse cu-child-box" id="{{ $menuId }}">
                    @foreach ($children as $child)
                        <a class="cu-child"
                            href="{{ $child->route && Route::has($child->route) ? route($child->route) : '#' }}">
                            <i class="bi bi-dot"></i> {{ $child->title }}
                        </a>
                    @endforeach
                </div>
            @endif

        </div>
    @endforeach
</div>

<style>
    /* Sidebar */
.cu-sidebar {
    width: 250px;
    background: #ffffff;
    height: 100vh;
    border-right: 1px solid #e5e7eb;
    padding: 15px;
    font-family: "Inter", sans-serif;
}

/* Header */
.cu-sidebar-header {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}

.cu-logo {
    width: 28px;
    height: 28px;
    background: #8b5cf6;
    color: white;
    border-radius: 6px;
    display:flex;
    align-items:center;
    justify-content:center;
    font-weight:bold;
}

.cu-title {
    font-size: 16px;
    font-weight: 600;
    margin-left: 10px;
}

/* Parent menu */
.cu-parent {
    margin-bottom: 5px;
}

.cu-parent-row {
    padding: 10px 8px;
    color: #1e3a8a;
    border-radius: 6px;
    transition: 0.25s;
}

.cu-parent-row:hover {
    background: #f3f4f6;
}

.cu-parent-link {
    color: #1e3a8a;
    text-decoration: none;
}

.cu-icon {
    font-size: 16px;
    color: #8b5cf6;
}

/* Caret rotation */
.cu-parent-row[aria-expanded="true"] .cu-caret {
    transform: rotate(90deg);
}

.cu-caret {
    font-size: 14px;
    transition: 0.2s;
    color: #9ca3af;
}

/* Child box */
.cu-child-box {
    padding-left: 25px;
}

/* Child item */
.cu-child {
    display: block;
    padding: 6px 4px;
    color: #6b7280;
    text-decoration: none;
    border-radius: 4px;
    transition: 0.2s;
}

.cu-child:hover {
    background: #eef2ff;
    color: #4338ca;
}

</style>
