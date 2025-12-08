@extends('layouts.app')

@section('title', 'เพิ่มทรัพย์สิน')

@section('breadcrumb-items')
    <li class="breadcrumb-item">
        <a href="{{ route('asset.index') }}">รายการทรัพย์สิน</a>
    </li>
    <li class="breadcrumb-item active">เพิ่มใหม่</li>
@endsection

@section('content')

<div class="card border-0 shadow-sm">
    <div class="card-body">
        <form action="#" method="POST">

            @csrf

            @include('Asset::partials.form')

            <button class="btn btn-primary mt-3">บันทึก</button>

        </form>
    </div>
</div>

@endsection
