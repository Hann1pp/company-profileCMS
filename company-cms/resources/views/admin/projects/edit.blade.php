@extends('admin.layout.app')

@section('title', 'Edit Project: ' . $project->title)

@section('content')
<div class="container-fluid">
    <!-- Judul Halaman -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        
        <a href="{{ route('admin.projects.index') }}" class="btn btn-sm btn-secondary shadow-sm">
            <i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali ke Daftar
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Project</h6>
        </div>
        <div class="card-body">
            <!-- Menampilkan error validasi jika ada -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <h4 class="alert-heading">Perhatian!</h4>
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                {{-- Menggunakan partial _form.blade.php untuk field utama, termasuk tombol simpan --}}
                @include('admin.projects._form', ['project' => $project])

            </form>
        </div>
    </div>
</div>
@endsection