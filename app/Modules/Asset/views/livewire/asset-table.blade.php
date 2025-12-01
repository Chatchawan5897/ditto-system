<div>
    @props([
        'headers' => [],
        'items' => [],
        'columns' => [],
        'actions' => null,
    ])

    <div class="cu-table-wrapper p-2">
        {{-- Header --}}
        <table class="table cu-table align-middle mb-0">
            <thead>
                <tr>
                    @foreach ($headers as $header)
                        <th class="cu-th">{{ $header }}</th>
                    @endforeach

                    @if ($actions)
                        <th class="cu-th text-end" style="width: 80px;"></th>
                    @endif
                </tr>
            </thead>

            <tbody>
                @forelse ($items as $item)
                    <tr class="cu-row">

                        @foreach ($columns as $col)
                            @php
                                $value = is_array($item) ? $item[$col] ?? '-' : data_get($item, $col, '-');
                            @endphp

                            {{-- special: progress --}}
                            @if ($col === 'progress')
                                <td class="cu-td">
                                    <div class="cu-progress">
                                        <div class="cu-progress-bar" style="width: {{ $value }}%;"></div>
                                    </div>
                                    <span class="cu-progress-text">{{ $value }}%</span>
                                </td>
                            @else
                                <td class="cu-td">{{ $value }}</td>
                            @endif
                        @endforeach

                        {{-- Actions --}}
                        @if ($actions)
                            <td class="cu-td text-end">
                                <div class="dropdown">
                                    <button class="btn btn-light btn-sm" data-bs-toggle="dropdown">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        @if (isset($actions['edit']))
                                            <li><a class="dropdown-item" href="{{ $actions['edit'] }}">แก้ไข</a></li>
                                        @endif
                                        @if (isset($actions['delete']))
                                            <li><a class="dropdown-item text-danger"
                                                    href="{{ $actions['delete'] }}">ลบ</a></li>
                                        @endif
                                    </ul>
                                </div>

                            </td>
                        @endif
                    </tr>

                @empty
                    <tr>
                        <td class="cu-empty" colspan="{{ count($headers) + ($actions ? 1 : 0) }}">
                            ไม่มีข้อมูล
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- ClickUp Style --}}
    <style>
        .cu-table-wrapper {
            background: #fff;
            border-radius: 12px;
            border: 1px solid #e5e7eb;
        }

        .cu-table {
            border-collapse: separate !important;
            border-spacing: 0;
            width: 100%;
            background: white;
        }

        .cu-th {
            font-size: 14px;
            font-weight: 600;
            color: #6b7280;
            padding: 14px;
            border-bottom: 1px solid #f3f4f6;
            background: #fafafa;
        }

        .cu-row:hover {
            background: #f9fafb;
        }

        .cu-td {
            font-size: 15px;
            padding: 14px;
            border-bottom: 1px solid #f3f4f6;
            color: #374151;
            vertical-align: middle;
        }

        .cu-empty {
            padding: 30px;
            text-align: center;
            color: #9ca3af;
        }

        /* Progress Bar */
        .cu-progress {
            width: 120px;
            height: 6px;
            background: #e5e7eb;
            border-radius: 5px;
            position: relative;
        }

        .cu-progress-bar {
            height: 100%;
            background: #7c3aed;
            border-radius: 5px;
        }

        .cu-progress-text {
            margin-left: 8px;
            color: #6b7280;
            font-size: 14px;
        }

        /* + New Item */
        .cu-new-item {
            padding: 10px 14px;
            cursor: pointer;
            font-size: 14px;
            color: #6b7280;
        }

        .cu-new-item:hover {
            background: #f3f4f6;
            border-radius: 8px;
            color: #4f46e5;
        }
    </style>

</div>
