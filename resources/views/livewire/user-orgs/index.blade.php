<div>

    @foreach ($items as $mainId => $group)
        <div class="mb-4 p-3 border rounded bg-light">

            <div class="fw-bold text-primary mb-2">
                👔 หัวหน้า: {{ $group[0]->main_name }} ({{ $group[0]->main_code }})
            </div>

            {{-- ปุ่มเพิ่มลูกน้อง --}}
            <div class="d-flex justify-content-end mb-2">
                <button class="btn btn-sm btn-success" wire:click="openAddModal({{ $mainId }})">
                    ➕ เพิ่มลูกน้อง
                </button>
            </div>

            {{-- ลูกทีม --}}
            <div class="ps-4">
                @foreach ($group as $emp)
                    <div class="p-3 mb-2 bg-white border rounded shadow-sm">

                        {{-- หัว Bubble + ปุ่มจัดการ --}}
                        <div class="d-flex justify-content-between">
                            <div class="fw-bold">
                                👤 {{ $emp->emp_firstname }} ({{ $emp->emp_code }})
                            </div>

                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-warning"
                                    wire:click="openMoveModal('{{ $emp->emp_code }}')">
                                    ย้าย
                                </button>

                                <button class="btn btn-sm btn-danger"
                                    wire:click="confirmDelete('{{ $emp->emp_code }}')">
                                    ลบ
                                </button>
                            </div>
                        </div>

                        {{-- รายละเอียด --}}
                        <div class="text-muted small">
                            ตำแหน่ง: {{ $emp->position_nameth }}
                            <br>
                            แผนก: {{ $emp->department_nameth }}
                        </div>

                    </div>
                @endforeach
            </div>

        </div>
    @endforeach


    <div class="mt-4">
        {{ $leaders->onEachSide(1)->links('pagination::bootstrap-5') }}
    </div>

    {{-- Modal เพิ่มลูกน้อง --}}
    <div class="modal fade @if ($showAddModal) show d-block @endif" tabindex="-1"
        style="background: rgba(0,0,0,0.5);">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">เพิ่มลูกน้องให้หัวหน้า</h5>
                    <button type="button" class="btn-close" wire:click="$set('showAddModal', false)"></button>
                </div>

                <div class="modal-body">

                    {{-- Leader --}}
                    <div class="mb-3">
                        <label class="form-label">หัวหน้า (employee_main_id)</label>
                        <input type="text" class="form-control" value="{{ $selectedLeader }}" disabled>
                    </div>

                    {{-- Employee Dropdown --}}
                    <div class="mb-3">
                        <label class="form-label">เลือกพนักงาน</label>
                        <select class="form-select" wire:model="selectedEmployee">
                            <option value="">-- เลือกพนักงาน --</option>
                            @foreach ($employees as $employeeUser)
                                <option value="{{ $employeeUser->id }}">
                                    {{ $employeeUser->employee_code }} - {{ $employeeUser->first_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" wire:click="$set('showAddModal', false)">ปิด</button>
                    <button class="btn btn-success" wire:click="addMember">เพิ่มลูกน้อง</button>
                </div>

            </div>
        </div>
    </div>


</div>
