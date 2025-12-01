<div class="card p-3 mb-3">
    <div class="row g-3">

        @foreach($fields as $field)
            <div class="col-md-3">

                {{-- TEXT INPUT --}}
                @if($field['type'] === 'text')
                    <label class="fw-bold">{{ $field['label'] }}</label>
                    <input type="text"
                        class="form-control"
                        wire:model.debounce.500ms="values.{{ $field['name'] }}">
                @endif

                {{-- SELECT --}}
                @if($field['type'] === 'select')
                    <label class="fw-bold">{{ $field['label'] }}</label>
                    <select class="form-select"
                        wire:model="values.{{ $field['name'] }}">
                        <option value="">-- ทั้งหมด --</option>
                        @foreach($field['options'] as $key => $opt)
                            <option value="{{ $key }}">{{ $opt }}</option>
                        @endforeach
                    </select>
                @endif

                {{-- DATE --}}
                @if($field['type'] === 'date')
                    <label class="fw-bold">{{ $field['label'] }}</label>
                    <input type="date"
                           class="form-control"
                           wire:model="values.{{ $field['name'] }}">
                @endif

            </div>
        @endforeach

    </div>

    <div class="mt-3">
        <button class="btn btn-outline-secondary btn-sm" wire:click="resetFilter">
            ล้างค่าการค้นหา
        </button>
    </div>
</div>
