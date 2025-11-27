@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

@php
    // MOCK USER
    $mockUser = [
        'first_name' => 'สมชาย',
        'last_name'  => 'ใจดี',
        'role'       => 'ผู้ดูแลระบบ',
    ];

    // MOCK SUMMARY
    $mockStats = [
        ['title' => 'รอตรวจนับ',      'value' => 12, 'icon' => '🕒'],
        ['title' => 'กำลังดำเนินการ', 'value' => 8,  'icon' => '🔧'],
        ['title' => 'ตรวจนับแล้ว',    'value' => 34, 'icon' => '✅'],
        ['title' => 'รออนุมัติ',      'value' => 5,  'icon' => '📤'],
    ];
@endphp

<div class="container-fluid">

    {{-- ============================
         WELCOME PANEL (modern minimal)
    ============================= --}}
    <div class="rounded-4 p-4 mb-4 bg-white border">
        <div class="row align-items-center">

            <div class="col-md-8">
                <h4 class="fw-semibold text-primary mb-1">👋 สวัสดี {{ $mockUser['first_name'] }}</h4>

                <div class="text-secondary">
                    บทบาท: <span class="fw-semibold">{{ $mockUser['role'] }}</span>
                </div>
            </div>

            <div class="col-md-4 text-end">
                <img src="{{ asset('images/asset-counting.png') }}"
                     class="img-fluid rounded-3"
                     style="max-height: 110px;">
            </div>

        </div>
    </div>

    {{-- ============================
         SUMMARY CARDS
    ============================= --}}
    <div class="row g-3 mb-4">

        @foreach($mockStats as $stat)
            <div class="col-6 col-md-3">
                <div class="p-3 bg-white border rounded-4 text-center stat-card">
                    <div class="fs-2 mb-1">{{ $stat['icon'] }}</div>
                    <div class="fw-semibold text-primary">{{ $stat['title'] }}</div>
                    <div class="fs-3 fw-bold">{{ $stat['value'] }}</div>
                </div>
            </div>
        @endforeach

    </div>

</div>

{{-- MINIMAL CARD HOVER --}}
<style>
    .stat-card {
        transition: 0.2s;
    }
    .stat-card:hover {
        transform: translateY(-2px);
        background-color: #f8fbff;
        border-color: #cfe2ff;
    }
</style>

@endsection
