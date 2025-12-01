@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

@php
    // MOCK (คุณเปลี่ยนเป็นข้อมูลจริงได้)
    $userName = "Chatchawan";

    $recents = [
        ["title" => "Infrastructure", "project" => "DNP"],
        ["title" => "Front office", "project" => "DNP"],
        ["title" => "List", "project" => "DMCR-MGIS"],
        ["title" => "DOL-งานระยะที่5", "project" => "BSM-DOL"],
        ["title" => "ระบบ-D-Fixed", "project" => "D-FixedAsset"],
    ];

    $myWork = [
        "Today" => 0,
        "Overdue" => 0,
        "Next" => 0,
        "Unscheduled" => 1,
    ];

    $assigned = [
        ["title" => "ทำ data 00647 สำนักงานที่ดินจังหวัดเลย สาขา…", "status" => "IN PROGRESS"],
    ];
@endphp

<div class="container-fluid dashboard-area">

    {{-- ============================
        Header Greeting
    ============================= --}}
    <h3 class="fw-semibold mb-4">Good afternoon, {{ $userName }}</h3>


    <div class="row g-4">

        {{-- ============================
            Recents
        ============================= --}}
        <div class="col-md-6">
            <div class="dash-card p-4">
                <h6 class="fw-bold mb-3">Recents</h6>

                @foreach($recents as $r)
                    <div class="recent-item">
                        <i class="bi bi-list nested-icon me-2"></i>
                        <span>{{ $r['title'] }}</span>
                        <span class="text-muted">· in {{ $r['project'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- ============================
            Agenda
        ============================= --}}
        <div class="col-md-6">
            <div class="dash-card p-4 text-center">
                <h6 class="fw-bold mb-3">Agenda</h6>
                <div class="text-muted mb-2">Today</div>

                <img src="https://img.icons8.com/ios/100/calendar--v1.png" class="opacity-50 mb-3"/>

                <div class="text-muted">Agenda items from your calendars will show here.</div>

                <button class="btn btn-primary btn-sm mt-3">
                    + Add calendar integrations
                </button>
            </div>
        </div>


        {{-- ============================
            My Work
        ============================= --}}
        <div class="col-md-6">
            <div class="dash-card p-4">
                <h6 class="fw-bold mb-3">My Work</h6>

                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">To Do</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Done</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Delegated</a>
                    </li>
                </ul>

                <div class="mt-3">

                    @foreach($myWork as $label => $value)
                        <div class="work-item">
                            <details>
                                <summary class="fw-semibold">{{ $label }} <span class="text-muted">{{ $value }}</span></summary>
                            </details>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>


        {{-- ============================
            Assigned to me
        ============================= --}}
        <div class="col-md-6">
            <div class="dash-card p-4">

                <div class="d-flex justify-content-between">
                    <h6 class="fw-bold mb-3">Assigned to me</h6>
                </div>

                <div class="assigned-box">

                    @foreach($assigned as $task)
                        <div class="assigned-item d-flex align-items-center mb-2 p-2">

                            <span class="status-badge me-2">●</span>

                            <span class="task-title">{{ $task['title'] }}</span>

                            <span class="ms-auto status-pill">
                                {{ $task['status'] }}
                            </span>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>

    </div>
</div>

@endsection


{{-- ============================
     CSS Dashboard Style (Notion / ClickUp Style)
============================ --}}
<style>
    body {
        background: #fafafa;
    }

    .dashboard-area {
        font-family: "Inter", sans-serif;
    }

    .dash-card {
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 16px;
        min-height: 200px;
    }

    .recent-item {
        padding: 6px 0;
        font-size: 14px;
        display: flex;
        align-items: center;
        color: #444;
    }

    .recent-item i {
        color: #888;
    }

    /* My Work details */
    .work-item summary {
        cursor: pointer;
        padding: 6px 0;
        font-size: 15px;
        color: #444;
    }

    /* Assigned */
    .assigned-item {
        border: 1px solid #eee;
        border-radius: 10px;
        background: #fff;
        transition: 0.15s;
    }

    .assigned-item:hover {
        background: #f1f5ff;
        border-color: #d0dcff;
    }

    .status-badge {
        color: #6b7280;
        font-size: 20px;
    }

    .status-pill {
        background: #6d28d9;
        color: white;
        padding: 3px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: bold;
    }
</style>
