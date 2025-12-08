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
            'label' => 'D-Assets',
            'icon' => 'bi bi-folder2',
            'route' => 'asset.index',
        ],
        [
            'label' => 'รายการทรัพย์สิน',
        ],
    ]" />

    <livewire:asset-table />
@endsection
