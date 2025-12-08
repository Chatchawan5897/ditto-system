@extends('layouts.app')

@section('title', 'รายละเอียดทรัพย์สิน')

@section('breadcrumb-items')
    <li class="breadcrumb-item">
        <a href="{{ route('asset.index') }}">รายการทรัพย์สิน</a>
    </li>
    <li class="breadcrumb-item active">รายละเอียด</li>
@endsection

@section('content')

<div class="card border-0 shadow-sm">
    <div class="card-body">

        <h4>{{ $asset['name'] }}</h4>
        <p class="text-muted">{{ $asset['description'] }}</p>

        <div class="row mt-4">
            <div class="col-md-6">
                <p><strong>หมวดหมู่:</strong> {{ $asset['category'] }}</p>
                <p><strong>สถานะ:</strong> {{ $asset['status'] }}</p>
            </div>
            <div class="col-md-6">
                <p><strong>สถานที่:</strong> {{ $asset['location'] }}</p>
                <p><strong>รหัสทรัพย์สิน:</strong> {{ $asset['code'] }}</p>
            </div>
        </div>

    </div>
</div>

@endsection
