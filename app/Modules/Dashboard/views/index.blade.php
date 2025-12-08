
@extends('layouts.app')

@section('title', 'Dashboard List')


@section('content')


    <x-breadcrumb :items="[
        [
            'label' => 'Software Development',
            'icon' => 'bi bi-briefcase-fill',
            'route' => 'dashboard.index',
        ],
        [
            'label' => 'Dashboard',
            'icon' => 'bi bi-folder2',
            'route' => 'asset.index',
        ],
        // [
        //     'label' => 'รายการทรัพย์สิน',
        // ],
    ]" />

@endsection
