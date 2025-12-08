<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Asset Counting')</title>

    {{-- Core CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <!-- Bootstrap JS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">

    {{-- Font --}}
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    {{-- Livewire Styles --}}
    @livewireStyles

    {{-- Global Styles --}}
    <style>
        body {
            font-family: 'Prompt', sans-serif;
            background-color: #f8f9fb;
        }

        /* Sidebar */
        .sidebar-minimal {
            width: 220px;
            min-height: 100vh;
            background: #fff;
            border-right: 1px solid #e9ecef;
        }

        .sidebar-minimal .list-group-item {
            border: none;
            transition: 0.2s;
            color: #495057;
            font-size: 15px;
        }

        .sidebar-minimal .list-group-item:hover {
            background: #f1f3f5;
            color: #212529;
            border-radius: 6px;
        }

        /* Header dropdown */
        .dropdown-menu {
            border-radius: 12px !important;
            padding: 8px 0;
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.08);
        }

        .dropdown-item {
            padding: 8px 16px;
            font-size: 14px;
        }

        .dropdown-item:hover {
            background: #f3f4f6;
        }

        /* Content area */
        .content-area {
            padding: 20px 28px;
            background: #f8f9fb;
            flex: 1;
        }

        nav.sidebar {
            width: 220px;
            background-color: #fff;
            border-right: 1px solid #dee2e6;
            padding-top: 1rem;
            overflow-y: auto;
            transition: 0.3s;
        }

        #app-container {
            display: flex;
            min-height: 100vh;
        }

        /* ClickUp breadcrumb */
        .cu-breadcrumb {
            font-size: 0.9rem;
            color: #666;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .cu-breadcrumb-item {
            display: flex;
            align-items: center;
            gap: 4px;
            font-weight: 500;
        }

        .cu-breadcrumb-item i {
            font-size: 16px;
            color: #6d6dfd;
            /* สีม่วง ClickUp */
        }

        .cu-breadcrumb-separator {
            color: #bbb;
            font-weight: 300;
            margin: 0 4px;
        }

        .cu-breadcrumb-link {
            text-decoration: none;
            color: #444;
        }

        .cu-breadcrumb-link:hover {
            color: #000;
        }
    </style>
</head>

<body class="bg-light">

    {{-- jQuery + Select2 --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    @auth
        {{-- HEADER --}}
        @include('layouts.header')

        {{-- BODY WRAPPER --}}
        <div id="app-container">

            {{-- SIDEBAR --}}
            <nav class="sidebar sidebar-minimal" id="sidebar">
                @include('layouts.sidebar')
            </nav>

            {{-- CONTENT --}}
            <main class="content-area" id="main-content">

                {{-- breadcrumb เฉพาะหน้าไม่ใช่ dashboard --}}
                @if (!request()->routeIs('dashboard.index'))
                    <div class="container-fluid">
                        {{-- <nav aria-label="breadcrumb" class="breadcrumb-custom mt-3 mb-3">
                            <ol class="breadcrumb mb-0">
                                @yield('breadcrumb-items')
                            </ol>
                        </nav> --}}
                        <div class="cu-breadcrumb mt-3 mb-3">
                            @yield('breadcrumb-items')
                        </div>


                    </div>
                @endif

                @yield('content')
            </main>
        </div>

        {{-- FOOTER --}}
        @include('layouts.footer')
    @else
        {{-- ถ้าไม่ได้ login --}}
        <main class="content-area">
            @yield('content')
        </main>
    @endauth

    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    {{-- Livewire Scripts --}}
    @livewireScripts

    {{-- Extra Scripts --}}
    @stack('scripts')

</body>

</html>
