<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Asset Counting')</title>

    <!-- โหลด CSS ต่าง ๆ -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Prompt', sans-serif;
        }
    </style>

  <!-- 👇 ใส่ CSS ตรงนี้ -->
    <style>
        .dropdown-menu {
            border-radius: 10px;
            padding: 8px 0;
        }

        .dropdown-item {
            padding: 8px 16px;
            font-size: 14px;
        }

        .dropdown-item:hover {
            background-color: #f0f2f5;
        }
    </style>

    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        #app-container {
            flex: 1;
            display: flex;
            overflow: hidden;
        }

        nav.sidebar {
            width: 220px;
            background-color: #f8f9fa;
            border-right: 1px solid #dee2e6;
            padding-top: 1rem;
            overflow-y: auto;
            transition: transform 0.3s ease;
        }

        main.content-area {
            flex: 1;
            /* padding: 1.5rem 2rem; */
            overflow-y: auto;
            background-color: white;
        }

        footer.footer-area {
            background-color: #f8f9fa;
            border-top: 1px solid #dee2e6;
            padding: 1rem 2rem;
            text-align: center;
            color: #6c757d;
            font-size: 0.9rem;
        }

        /* Breadcrumb */
        .breadcrumb-custom {
            background-color: #f8f9fa;
            padding: 10px 20px;
            border-radius: 8px;
            border: 1px solid #dee2e6;
            margin-bottom: 20px;
        }

        .breadcrumb-custom .breadcrumb-item+.breadcrumb-item::before {
            content: "›";
            color: #6c757d;
        }

        .breadcrumb-custom .breadcrumb-item.active {
            font-weight: bold;
            color: #495057;
        }

        /* Responsive สำหรับมือถือ */
        @media (max-width: 767.98px) {
            #app-container {
                flex-direction: column;
            }

            nav.sidebar {
                position: fixed;
                top: 0;
                left: 0;
                height: 100vh;
                width: 250px;
                z-index: 1045;
                background-color: #f8f9fa;
                border-right: 1px solid #dee2e6;
                transform: translateX(-100%);
            }

            nav.sidebar.show {
                transform: translateX(0);
                box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            }

            main.content-area {
                padding: 1rem;
            }
        }
    </style>

<style>
    body {
        font-family: "Prompt", sans-serif;
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

    /* Header profile dropdown */
    .dropdown-menu {
        border-radius: 12px !important;
        padding: 8px 0;
    }

    .dropdown-item {
        padding: 8px 16px;
        font-size: 14px;
    }

    .dropdown-item:hover {
        background: #f3f4f6;
    }

    /* Content */
    .content-area {
        padding: 20px 28px;
        background: #f8f9fb;
    }

    /* Smooth shadows */
    .card,
    .dropdown-menu {
        box-shadow: 0px 2px 6px rgba(0,0,0,0.08);
    }
</style>


</head>

<body class="bg-light">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    @auth
        <!-- Header -->
        @include('layouts.header')

        <!-- Container หลัก: Sidebar + Content -->
        <div id="app-container">
            <nav class="sidebar" id="sidebar">
                @include('layouts.sidebar')
            </nav>

            <main class="content-area" id="main-content">
                @if (!request()->routeIs('dashboard.index'))
                    {{-- ตรวจสอบว่าไม่ใช่หน้า dashboard --}}
                    {{-- <nav aria-label="breadcrumb" class="breadcrumb-custom">
                        <ol class="breadcrumb mb-0">
                            @yield('breadcrumb-items')
                        </ol>
                    </nav> --}}

                    <div class="container-fluid">
                        <nav aria-label="breadcrumb" class="breadcrumb-custom mt-3 mb-3">
                            <ol class="breadcrumb mb-0">
                                @yield('breadcrumb-items')
                            </ol>
                        </nav>
                    </div>

                    {{-- <nav aria-label="breadcrumb" class="breadcrumb-custom mt-3 mb-3">
                        <ol class="breadcrumb mb-0">
                            @yield('breadcrumb-items')
                        </ol>
                    </nav> --}}
                @endif

                @yield('content')
            </main>

        </div>


        <!-- Toggle Sidebar Script สำหรับมือถือ -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const sidebar = document.getElementById('sidebar');
                const toggleButtons = document.querySelectorAll('.btn-toggle-sidebar');

                toggleButtons.forEach(btn => {
                    btn.addEventListener('click', () => {
                        sidebar.classList.toggle('show');
                    });
                });

                // คลิกที่ content-area บนมือถือ ปิด sidebar
                const mainContent = document.getElementById('main-content');
                mainContent.addEventListener('click', () => {
                    if (window.innerWidth < 768 && sidebar.classList.contains('show')) {
                        sidebar.classList.remove('show');
                    }
                });
            });
        </script>
    @else
        <main class="content-area">
            @yield('content')
        </main>
    @endauth

    @include('layouts.footer')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts')
</body>

</html>
