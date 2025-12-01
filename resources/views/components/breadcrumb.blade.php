<div class="cu-breadcrumb d-flex align-items-center gap-2">
    @foreach ($items as $item)
        <div class="cu-breadcrumb-item d-flex align-items-center gap-1">
            @if (!empty($item['icon']))
                <i class="{{ $item['icon'] }}"></i>
            @endif

            @if (!empty($item['route']))
                <a class="cu-breadcrumb-link" href="{{ route($item['route']) }}">
                    {{ $item['label'] }}
                </a>
            @else
                <span class="cu-breadcrumb-text">{{ $item['label'] }}</span>
            @endif
        </div>
        @if (!$loop->last)
            <span class="cu-breadcrumb-separator">/</span>
        @endif
    @endforeach
</div>
