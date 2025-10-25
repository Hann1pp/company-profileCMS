    @extends('admin.layout.app')

    @section('title', 'Dashboard Utama')

    @section('content')
    <div class="alert alert-info">
        Selamat datang di Admin CMS Company Profile! Gunakan sidebar di kiri untuk mengelola konten perusahaan Anda.
    </div>

    <div class="row">
        {{-- Card Placeholder Statistik --}}
        <div class="col-lg-4 mb-4">
            <div class="card bg-primary text-white shadow">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Total Produk</div>
                            <div class="h5 mb-0 font-weight-bold">0</div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-box-seam fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 mb-4">
            <div class="card bg-success text-white shadow">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Total Layanan</div>
                            <div class="h5 mb-0 font-weight-bold">0</div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-gear fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 mb-4">
            <div class="card bg-warning text-white shadow">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Total Posts</div>
                            <div class="h5 mb-0 font-weight-bold">0</div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-file-text fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection