<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin CMS | @yield('title', 'Dashboard')</title>
    {{-- Bootstrap 5 & Icons CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        .sidebar { z-index: 100; padding: 48px 0 0; box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1); }
        .sidebar .nav-link.active { color: #0d6efd; }
    </style>
</head>
<body>

    {{-- Navbar Top --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('admin.dashboard') }}">Company CMS</a>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <span class="nav-link text-white">Halo, {{ Auth::user()->name ?? 'Admin' }}</span>
                </li>
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm my-1 my-lg-0"><i class="bi bi-box-arrow-right"></i> Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            {{-- Sidebar --}}
            {{-- Sidebar --}}
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse vh-100 position-fixed">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item"><a class="nav-link @if(Request::is('admin')) active @endif" href="{{ route('admin.dashboard') }}"><i class="bi bi-speedometer2"></i> Dashboard</a></li>
                        <li class="nav-item"><h6 class="sidebar-heading px-3 mt-4 mb-1 text-muted"><span>Manajemen Konten</span></h6></li>
                        <li class="nav-item"><a class="nav-link @if(Request::is('admin/products*')) active @endif" href="{{ route('admin.products.index') }}"><i class="bi bi-box-seam"></i> Produk</a></li>
                        <li class="nav-item"><a class="nav-link @if(Request::is('admin/partners*')) active @endif" href="{{ route('admin.partners.index') }}"><i class="bi bi-box-seam"></i> Partner</a></li>
                        <li class="nav-item"><a class="nav-link @if(Request::is('admin/services*')) active @endif" href="{{ route('admin.services.index') }}"><i class="bi bi-gear"></i> Layanan</a></li>
                        
                        <li class="nav-item">
                            <a class="nav-link @if(Request::is('admin/projects*')) active @endif" href="{{ route('admin.projects.index') }}">
                                <i class="bi bi-folder2-open"></i> Projects
                            </a>
                            
                </div>
            </nav>

            {{-- Main Content --}}
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                <h1 class="h2 mb-4">@yield('title')</h1>

                {{-- Flash Messages & Errors --}}
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert"><i class="bi bi-check-circle-fill"></i> {{ session('success') }}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert"><h6><i class="bi bi-exclamation-triangle-fill"></i> Perhatian! Terdapat kesalahan input.</h6><ul class="mb-0">@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>