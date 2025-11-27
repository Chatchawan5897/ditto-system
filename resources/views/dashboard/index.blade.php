@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    @php
        // ===========================
        // MOCK USER
        // ===========================
        $mockUser = [
            'first_name' => 'สมชาย',
            'last_name' => 'ใจดี',
            'role' => 'ผู้ดูแลระบบ',
        ];

        // ===========================
        // MOCK SUMMARY CARD
        // ===========================
        $mockStats = [
            ['title' => 'รอตรวจนับ', 'value' => 12, 'icon' => '🕒'],
            ['title' => 'กำลังดำเนินการ', 'value' => 8, 'icon' => '🔧'],
            ['title' => 'ตรวจนับแล้ว', 'value' => 34, 'icon' => '✅'],
            ['title' => 'รออนุมัติ', 'value' => 5, 'icon' => '📤'],
        ];

        // ===========================
        // MOCK LAST INSPECTION TABLE
        // ===========================
        $mockTable = [
            [
                'id' => 'P001',
                'name' => 'แผนรอบเดือน ก.ค.',
                'status' => 'กำลังดำเนินการ',
                'date' => '2025-07-10',
                'by' => 'สมชาย',
            ],
            [
                'id' => 'P002',
                'name' => 'แผนปี 2025',
                'status' => 'ตรวจนับแล้ว',
                'date' => '2025-07-08',
                'by' => 'สมหญิง',
            ],
            [
                'id' => 'P003',
                'name' => 'แผนจร',
                'status' => 'รอตรวจนับ',
                'date' => '2025-07-12',
                'by' => 'ธวัชชัย',
            ],
        ];
    @endphp


    <div class="container-fluid py-4">

        {{-- ===========================
         SECTION 1 — WELCOME PANEL
    ============================ --}}
        <div class="row justify-content-center mb-4">
            <div class="col-12 col-md-10 col-lg-8">
                <div class="row g-3">

                    {{-- Welcome --}}
                    <div class="col-12 col-lg-8">
                        <div class="card shadow-lg border-0 rounded-4 h-100">
                            <div class="card-body p-4">
                                <div class="row align-items-center">

                                    <div class="col-md-7">
                                        <h3 class="mb-2" style="color: #4285F4;">👋 ยินดีต้อนรับ</h3>
                                        <h4 class="mb-3 text-primary">
                                            {{ $mockUser['first_name'] }} {{ $mockUser['last_name'] }}
                                        </h4>
                                        <p class="text-muted mb-0">
                                            บทบาทของคุณ:
                                            <span class="fw-semibold" style="color: #4285F4;">
                                                {{ $mockUser['role'] }}
                                            </span>
                                        </p>
                                    </div>

                                    <div class="col-md-5 text-center">
                                        <img src="{{ asset('images/asset-counting.png') }}" alt="การนับทรัพย์สิน"
                                            class="img-fluid rounded-3" style="max-height: 120px;">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Notification --}}
                    <div class="col-12 col-lg-4">
                        <div class="card shadow-lg border-0 rounded-4 h-100">
                            <div class="card-body p-4">
                                <h5 class="text-primary fw-bold mb-3">🔔 แจ้งเตือนเกี่ยวกับฉัน</h5>

                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><i class="ri-check-line text-success me-2"></i> ตรวจนับประจำเดือนนี้:
                                        <strong>3 รายการ</strong></li>
                                    <li class="mb-2"><i class="ri-error-warning-line text-warning me-2"></i>
                                        รายการรอตรวจสอบ: <strong>1 รายการ</strong></li>
                                    <li><i class="ri-time-line text-secondary me-2"></i> ครั้งล่าสุด: <strong>12 ก.ค.
                                            2025</strong></li>
                                </ul>

                            </div>
                        </div>
                    </div>

                </div> {{-- row --}}
            </div>
        </div>
    </div>


    <style>
        .card:hover {
            box-shadow: 0 0.5rem 1.5rem rgba(66, 133, 244, 0.2);
        }
    </style>

@endsection
