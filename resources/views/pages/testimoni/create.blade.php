@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Buat Testimoni</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('testimoni.index') }}">Testimoni</a></div>
                <div class="breadcrumb-item active">Buat</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row mt-sm-4">
                <div class="col-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Buat Testimoni</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('testimoni.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class='form-group mb-3'>
                                    <label for='foto' class='mb-2'>Foto</label>
                                    <input type='file' name='foto' id='foto'
                                        class='form-control @error('foto') is-invalid @enderror'
                                        value='{{ old('foto') }}'>
                                    @error('foto')
                                        <div class='invalid-feedback'>
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class='form-group mb-3'>
                                    <label for='nama' class='mb-2'>Nama <span
                                            class='text-danger small'>*</span></label>
                                    <input type='text' name='nama' id='nama'
                                        class='form-control @error('nama') is-invalid @enderror'
                                        value='{{ old('nama') }}'>
                                    @error('nama')
                                        <div class='invalid-feedback'>
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class='form-group mb-3'>
                                    <label for='jabatan' class='mb-2'>Jabatan</label>
                                    <input type='text' name='jabatan' id='jabatan'
                                        class='form-control @error('jabatan') is-invalid @enderror'
                                        value='{{ old('jabatan') }}'>
                                    @error('jabatan')
                                        <div class='invalid-feedback'>
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class='form-group mb-3'>
                                    <label for='deskripsi' class='mb-2'>Deskripsi</label>
                                    <textarea name='deskripsi' id='deskripsi' cols='30' rows='3'
                                        class='form-control @error('deskripsi') is-invalid @enderror'>{{ old('deskripsi') }}</textarea>
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
