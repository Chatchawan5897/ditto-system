@props([
    'headers' => [],
    'items' => [],
    'columns' => [],
    'actions' => null,
    'showIndex' => true,
    'autoActionHeader' => true,
])

<div class="table-responsive" style="padding: 5px;">
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
                    <th class="text-center" style="width: 150px;">จัดการ</th>
                @endif
            </tr>
        </thead>

        <tbody>
            @forelse ($items as $index => $item)
                @php
                    // รองรับทั้ง Array และ Object
                    $get = function($item, $key) {
                        if (is_array($item)) return $item[$key] ?? '-';
                        return data_get($item, $key, '-');
                    };
                @endphp

                <tr>
                    @if ($showIndex)
                        <td class="text-center">{{ $index + 1 }}</td>
                    @endif

                    @foreach ($columns as $col)
                        @php
                            if ($col === 'full_name') {
                                $value = trim(($get($item,'first_name').' '.$get($item,'last_name')));
                            } else {
                                $value = $get($item, $col);
                            }
                        @endphp

                        <td class="text-center">{{ is_array($value) ? implode(', ', $value) : $value }}</td>
                    @endforeach

                    @if ($actions)
                        <td class="text-center">

                            {{-- Desktop --}}
                            <div class="d-none d-md-flex justify-content-center gap-1">

                                @if (isset($actions['show']))
                                    <a href="{{ str_replace('__ID__', $get($item,'id'), $actions['show']) }}"
                                        class="btn btn-outline-google-green">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                @endif

                                @if (isset($actions['edit']))
                                    <a href="{{ str_replace('__ID__', $get($item,'id'), $actions['edit']) }}"
                                        class="btn btn-outline-google-blue">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                @endif

                                @if (isset($actions['delete']))
                                    <form action="{{ str_replace('__ID__', $get($item,'id'), $actions['delete']) }}"
                                        method="POST" onsubmit="return confirm('ต้องการลบใช่หรือไม่?')">
                                        @csrf @method('DELETE')
                                        <button class="btn btn-outline-google-red">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                @endif

                            </div>

                            {{-- Mobile --}}
                            <div class="dropdown d-md-none">
                                <button class="btn btn-sm btn-secondary dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    @if (isset($actions['show']))
                                        <li>
                                            <a class="dropdown-item"
                                                href="{{ str_replace('__ID__', $get($item,'id'), $actions['show']) }}">
                                                ดูข้อมูล
                                            </a>
                                        </li>
                                    @endif

                                    @if (isset($actions['edit']))
                                        <li>
                                            <a class="dropdown-item"
                                                href="{{ str_replace('__ID__', $get($item,'id'), $actions['edit']) }}">
                                                แก้ไข
                                            </a>
                                        </li>
                                    @endif

                                    @if (isset($actions['delete']))
                                        <li>
                                            <form action="{{ str_replace('__ID__', $get($item,'id'), $actions['delete']) }}"
                                                method="POST"
                                                onsubmit="return confirm('ต้องการลบใช่หรือไม่?')">
                                                @csrf @method('DELETE')
                                                <button class="dropdown-item text-danger">ลบ</button>
                                            </form>
                                        </li>
                                    @endif
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
</div>

{{-- Pagination --}}
@if ($items instanceof \Illuminate\Pagination\LengthAwarePaginator ||
     $items instanceof \Illuminate\Pagination\Paginator)
    <div class="d-flex justify-content-end mt-2">
        {{ $items->withQueryString()->links() }}
    </div>
@endif

