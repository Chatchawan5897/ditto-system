<div id="sidebar">

    <div class="text-center py-3 border-bottom fw-bold">
        Ditto Backoffice
    </div>

   

    @php
        // MOCK DATA MENU แบบ Minimal Modern
        $menus = collect([
            // ===== Dashboard =====
            [
                'id' => 1,
                'title' => 'Dashboard',
                'icon' => 'bi-speedometer2',
                'url' => '/dashboard',
                'parent_id' => null,
            ],

            // ===== Asset Management =====
            [
                'id' => 2,
                'title' => 'Asset Management',
                'icon' => 'bi-hdd-stack',
                'parent_id' => null,
            ],
            [
                'id' => 3,
                'title' => 'Asset List',
                'icon' => 'bi-dot',
                'url' => '/assets',
                'parent_id' => 2,
            ],
            [
                'id' => 4,
                'title' => 'Categories',
                'icon' => 'bi-dot',
                'url' => '/asset/categories',
                'parent_id' => 2,
            ],

            // ===== Car Monitor =====
            [
                'id' => 5,
                'title' => 'Car Monitor',
                'icon' => 'bi-truck',
                'parent_id' => null,
            ],
            [
                'id' => 6,
                'title' => 'Tracking',
                'icon' => 'bi-dot',
                'url' => '/car/tracking',
                'parent_id' => 5,
            ],
            [
                'id' => 7,
                'title' => 'Maintenance',
                'icon' => 'bi-dot',
                'url' => '/car/maintenance',
                'parent_id' => 5,
            ],

            // ===== Users =====
            [
                'id' => 8,
                'title' => 'User Management',
                'icon' => 'bi-people',
                'parent_id' => null,
            ],
            [
                'id' => 9,
                'title' => 'Users',
                'icon' => 'bi-dot',
                'url' => '/users',
                'parent_id' => 8,
            ],
            [
                'id' => 10,
                'title' => 'Roles',
                'icon' => 'bi-dot',
                'url' => '/roles',
                'parent_id' => 8,
            ],
            [
                'id' => 11,
                'title' => 'Permissions',
                'icon' => 'bi-dot',
                'url' => '/permissions',
                'parent_id' => 8,
            ],

            // ===== Settings =====
            [
                'id' => 12,
                'title' => 'Settings',
                'icon' => 'bi-gear',
                'url' => '/settings',
                'parent_id' => null,
            ],
        ]);

        // PARENT MENU
        $parents = $menus->whereNull('parent_id');

        // CHILDREN HELPER
        function getChildren($menus, $parentId)
        {
            return $menus->where('parent_id', $parentId);
        }
    @endphp


    <div class="list-group list-group-flush">

        @foreach ($parents as $parent)
            @php
                $children = getChildren($menus, $parent['id']);
                $menuId = 'menu' . $parent['id'];
            @endphp

            @if ($children->count() > 0)
                <a href="#{{ $menuId }}" data-bs-toggle="collapse"
                    class="list-group-item list-group-item-action d-flex justify-content-between">
                    <span><i class="bi {{ $parent['icon'] }} me-2"></i> {{ $parent['title'] }}</span>
                    <i class="bi bi-chevron-down"></i>
                </a>

                <div class="collapse" id="{{ $menuId }}">
                    @foreach ($children as $child)
                        <a href="{{ $child['url'] }}" class="list-group-item list-group-item-action ps-5">
                            <i class="bi {{ $child['icon'] }} me-2"></i>
                            {{ $child['title'] }}
                        </a>
                    @endforeach
                </div>
            @else
                <a href="{{ $parent['url'] }}" class="list-group-item list-group-item-action">
                    <i class="bi {{ $parent['icon'] }} me-2"></i>
                    {{ $parent['title'] }}
                </a>
            @endif
        @endforeach

    </div>
</div>
