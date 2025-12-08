<div>
    {{-- resources/views/components/table.blade.php --}}
    @props([
        'headers' => [],
        'items' => [],
        'columns' => [],
        'actions' => null,
        'showIndex' => true,
        'autoActionHeader' => true,
    ])

    {{-- <div class="table-responsive p-2"> --}}
    <div class="table-responsive p-2" style="overflow-x:auto;">
        <table {{ $attributes->merge(['class' => 'table table-bordered table-hover align-middle mb-0 custom-table']) }}>
            <thead class="table-light">
                <tr>
                    @if ($showIndex)
                        <th class="text-center" style="width: 50px;">#</th>
                    @endif

                    @foreach ($headers as $header)
                        <th class="text-center">{{ $header }}</th>
                    @endforeach

                    @if ($actions && $autoActionHeader)
                        <th class="text-center" style="width: 170px;">จัดการ</th>
                    @endif
                </tr>
            </thead>

            <tbody>
                @forelse ($items as $index => $item)
                    <tr>
                        @if ($showIndex)
                            <td class="text-center">{{ $index + 1 }}</td>
                        @endif

                        {{-- @foreach ($columns as $col)
                            @php
                                if ($col === 'image_item_thumbnail') {
                                    $value = $item->image_item_thumbnail ?: asset('images/no-image-icon.png');
                                } elseif ($col === 'first_name') {
                                    $value =
                                        $item->first_name || $item->last_name
                                            ? $item->employee_code . ': ' . $item->first_name . ' ' . $item->last_name
                                            : '-';
                                } else {
                                    $value = data_get($item, $col, '-');
                                }
                            @endphp

                            <td class="text-truncate" title="{{ $value }}">
                                {{ $value }}
                            </td>
                        @endforeach --}}

                        @foreach ($columns as $col)
                            @php
                                if ($col === 'image_item_thumbnail') {
                                    // ถ้าไม่มีรูป ให้ใช้ no-image
                                    $value = blank($item->image_item_thumbnail)
                                        ? asset('images/no-image-icon.png')
                                        : $item->image_item_thumbnail;
                                } else {
                                    // ค่าปกติ
                                    $value = data_get($item, $col, '-');
                                }
                            @endphp

                            <td class="text-truncate" title="{{ $value }}">
                                @if ($col === 'image_item_thumbnail')
                                    <img src="{{ $value }}" alt="Thumbnail"
                                        style="width:40px; height:40px; object-fit:cover;">
                                @else
                                    {{ $value }}
                                @endif
                            </td>
                        @endforeach



                        @if ($actions)
                            <td class="text-center">
                                {{-- Desktop View --}}
                                <div class="d-none d-md-flex justify-content-center gap-1 flex-wrap">
                                    @foreach (['start', 'show', 'detail', 'edit', 'delete', 'permissions', 'roles'] as $key)
                                        @if (isset($actions[$key]))
                                            @php
                                                $url = str_replace('__ID__', $item->id, $actions[$key]);
                                            @endphp
                                            @if ($key === 'delete')
                                                <form action="{{ $url }}" method="POST"
                                                    onsubmit="return confirm('คุณแน่ใจหรือไม่ว่าจะลบรายการนี้?');"
                                                    style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-outline-google-red" type="submit"
                                                        title="ลบ">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </form>
                                            @else
                                                <a href="{{ $url }}"
                                                    class="btn btn-outline-google-{{ match ($key) {
                                                        'edit' => 'blue',
                                                        'permissions' => 'yellow',
                                                        'roles' => 'blue',
                                                        default => 'green',
                                                    } }}"
                                                    title="{{ ucfirst($key) }}">
                                                    <i
                                                        class="bi {{ match ($key) {
                                                            'start' => 'bi-play-circle',
                                                            'show' => 'bi-eye',
                                                            'detail' => 'bi-eye',
                                                            'edit' => 'bi-pencil-square',
                                                            'permissions' => 'bi-key',
                                                            'roles' => 'bi-person-badge',
                                                            default => '',
                                                        } }}"></i>
                                                </a>
                                            @endif
                                        @endif
                                    @endforeach
                                </div>

                                {{-- Mobile View: Dropdown --}}
                                <div class="dropdown d-md-none">
                                    <button class="btn btn-sm btn-secondary dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        @foreach (['start', 'show', 'detail', 'edit', 'delete', 'permissions', 'roles'] as $key)
                                            @if (isset($actions[$key]))
                                                @php $url = str_replace('__ID__', $item->id, $actions[$key]); @endphp
                                                @if ($key === 'delete')
                                                    <li>
                                                        <form action="{{ $url }}" method="POST"
                                                            onsubmit="return confirm('คุณแน่ใจหรือไม่ว่าจะลบรายการนี้?');">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-outline-google-red w-100 mb-1"
                                                                type="submit" title="ลบ">
                                                                <i class="bi bi-trash me-1"></i> ลบ
                                                            </button>
                                                        </form>
                                                    </li>
                                                @else
                                                    <li>
                                                        <a href="{{ $url }}"
                                                            class="btn btn-outline-google-{{ match ($key) {
                                                                'edit' => 'blue',
                                                                'permissions' => 'yellow',
                                                                'roles' => 'blue',
                                                                default => 'green',
                                                            } }} w-100 mb-1"
                                                            title="{{ ucfirst($key) }}">
                                                            <i
                                                                class="bi {{ match ($key) {
                                                                    'start' => 'bi-play-circle',
                                                                    'show' => 'bi-eye',
                                                                    'detail' => 'bi-eye',
                                                                    'edit' => 'bi-pencil-square',
                                                                    'permissions' => 'bi-key',
                                                                    'roles' => 'bi-person-badge',
                                                                    default => '',
                                                                } }} me-1"></i>
                                                            {{ ucfirst($key) }}
                                                        </a>
                                                    </li>
                                                @endif
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </td>
                        @endif
                    </tr>
                @empty
                    <tr>
                        <td colspan="{{ count($headers) + ($actions ? 1 : 0) + ($showIndex ? 1 : 0) }}"
                            class="text-center text-muted">
                            ไม่มีข้อมูล
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        @if (method_exists($items, 'links'))
            <div class="d-flex justify-content-end mt-2">
                {{ $items->withQueryString()->links() }}
            </div>
        @endif
    </div>

    <style>
        .custom-table th,
        .custom-table td {
            padding: 0.5rem 0.75rem;
            vertical-align: middle;
            font-size: 0.875rem;
        }

        .custom-table thead th {
            background-color: #e3f2fd;
            color: #0d47a1;
            font-weight: 600;
            border-bottom: 2px solid #dee2e6;
        }

        .custom-table tbody td {
            border: none;
        }

        .custom-table tbody tr:hover {
            background-color: #f1f3f5;
            transition: background-color 0.2s ease-in-out;
        }

        /* Google color outline buttons */
        .btn-outline-google-blue {
            color: #4285F4;
            border: 1px solid #4285F4;
            background-color: transparent;
        }

        .btn-outline-google-blue:hover {
            background-color: #4285F4;
            color: #fff;
        }

        .btn-outline-google-red {
            color: #EA4335;
            border: 1px solid #EA4335;
            background-color: transparent;
        }

        .btn-outline-google-red:hover {
            background-color: #EA4335;
            color: #fff;
        }

        .btn-outline-google-green {
            color: #34A853;
            border: 1px solid #34A853;
            background-color: transparent;
        }

        .btn-outline-google-green:hover {
            background-color: #34A853;
            color: #fff;
        }

        .btn-outline-google-yellow {
            color: #FBBC05;
            border: 1px solid #FBBC05;
            background-color: transparent;
        }

        .btn-outline-google-yellow:hover {
            background-color: #FBBC05;
            color: #000;
        }
    </style>

</div>
