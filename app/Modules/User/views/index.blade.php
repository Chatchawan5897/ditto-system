{{-- ditto-system/app/Modules/Asset/views/index.blade.php --}}

@extends('layouts.app')

@section('title', 'Asset List')


@section('content')


    <x-breadcrumb :items="[
        [
            'label' => 'Software Development',
            'icon' => 'bi bi-briefcase-fill',
            'route' => 'dashboard.index',
        ],
        [
            'label' => 'D-AssetCounting',
            'icon' => 'bi bi-folder2',
            'route' => 'asset.index',
        ],
        [
            'label' => 'รายการทรัพย์สิน',
        ],
    ]" />

    {{-- ทำ filterข้อมูลจาก filter compoennt --}}
    {{-- <livewire:filter target="asset-table" /> --}}

    {{-- ทำตารางข้อมูลจาก table component --}}
    {{-- <livewire:asset-table :items="$items" :headers="$headers" :columns="$columns" :actions="$actions" /> --}}




@endsection
