@extends('layouts.app')

@section('title', 'แก้ไขทรัพย์สิน')

@section('breadcrumb-items')
    <li class="breadcrumb-item">
        <a href="{{ route('asset.index') }}">รายการทรัพย์สิน</a>
    </li>
    <li class="breadcrumb-item active">แก้ไข</li>
@endsection

@section('content')

<div class="card border-0 shadow-sm">
    <div class="card-body">
        <form action="#" method="POST">

            @csrf
            @method('PUT')

            @include('Asset::partials.form', ['mode' => 'edit'])

            <button class="btn btn-warning mt-3">อัปเดตข้อมูล</button>

        </form>
    </div>
</div>

@endsection
