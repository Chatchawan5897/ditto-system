@extends('layouts.app')

@section('title', 'Asset List')

@section('content')

    {{-- <livewire:asset-table 
        :headers="$headers" 
        :items="$items" 
        :columns="$columns" 
        :actions="$actions"
        class="table-hover"
        id="roles-table" 
    /> --}}

    <livewire:asset-table :items="$items" :headers="$headers" :columns="$columns"  :actions="$actions"/>

@endsection
