@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Buat Portofolio</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('portofolio.index') }}">Portofolio</a></div>
                <div class="breadcrumb-item active">Buat</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row mt-sm-4">
                <div class="col-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Buat Portofolio</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('portofolio.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class='form-group mb-3'>
                                    <label for='gambar' class='mb-2'>Gambar <span
                                            class='text-danger small'>*</span></label>
                                    <input type='file' name='gambar' id='gambar'
                                        class='form-control @error('gambar') is-invalid @enderror'
                                        value='{{ old('gambar') }}'>
                                    @error('gambar')
                                        <div class='invalid-feedback'>
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class='form-group mb-3'>
                                    <label for='judul' class='mb-2'>Judul <span
                                            class='text-danger small'>*</span></label>
                                    <input type='text' name='judul' id='judul'
                                        class='form-control @error('judul') is-invalid @enderror'
                                        value='{{ old('judul') }}'>
                                    @error('judul')
                                        <div class='invalid-feedback'>
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class='form-group mb-3'>
                                    <label for='deskripsi_singkat' class='mb-2'>Deskripsi Singkat <span
                                            class='text-danger small'>*</span></label>
                                    <textarea name='deskripsi_singkat' id='deskripsi_singkat' cols='30' rows='3'
                                        class='form-control @error('deskripsi_singkat') is-invalid @enderror'>{{ old('deskripsi_singkat') }}</textarea>
                                    @error('deskripsi_singkat')
                                        <div class='invalid-feedback'>
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class='form-group mb-3'>
                                    <label for='deskripsi' class='mb-2'>Deskripsi</label>
                                    <textarea name='deskripsi' id='deskripsi' cols='30' rows='3'
                                        class='form-control @error('deskripsi') is-invalid @enderror' placeholder="Masukan Deskripsi">{{ old('deskripsi') }}</textarea>
                                    @error('deskripsi')
                                        <div class='invalid-feedback'>
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class='form-group float-right'>
                                    <button class='btn btn-primary'>Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('styles')
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script>
@endpush
@push('scripts')
    <script>
        $(document).ready(function() {
            $('#deskripsi').summernote({
                height: 200,
                placehoder: 'Masukkan Deskripsi',
            });
        });
    </script>
@endpush
