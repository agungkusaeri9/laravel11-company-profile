@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Buat Galeri</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('galeri.index') }}">Galeri</a></div>
                <div class="breadcrumb-item active">Buat</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row mt-sm-4">
                <div class="col-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Buat Galeri</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('galeri.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class='form-group mb-3'>
                                    <label for='gambar' class='mb-2'>Gambar <span class="text-danger small">Dapat
                                            diupload lebih dari
                                            satu</span></label>
                                    <input type='file' name='gambar[]' id='gambar'
                                        class='form-control @error('gambar') is-invalid @enderror'
                                        value='{{ old('gambar') }}' multiple>
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
