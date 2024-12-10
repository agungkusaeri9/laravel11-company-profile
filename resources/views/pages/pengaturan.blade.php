@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Pengaturan</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item active">Edit</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row mt-sm-4">
                <div class="col-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Pengaturan</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('pengaturan.update') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <div class="row">
                                    <div class="col-md">
                                        <div class='form-group mb-3'>
                                            <label for='nama_web' class='mb-2'>Nama Web <span
                                                    class='text-danger small'>*</span></label>
                                            <input type='text' name='nama_web' id='nama_web'
                                                class='form-control @error('nama_web') is-invalid @enderror'
                                                value='{{ $item->nama_web ?? old('nama_web') }}'>
                                            @error('nama_web')
                                                <div class='invalid-feedback'>
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class='form-group mb-3'>
                                            <label for='email' class='mb-2'>Email <span
                                                    class='text-danger small'>*</span></label>
                                            <input type='text' name='email' id='email'
                                                class='form-control @error('email') is-invalid @enderror'
                                                value='{{ $item->email ?? old('email') }}'>
                                            @error('email')
                                                <div class='invalid-feedback'>
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class='form-group mb-3'>
                                            <label for='nomor_telepon' class='mb-2'>Nomor Telepon <span
                                                    class='text-danger small'>*</span></label>
                                            <input type='text' name='nomor_telepon' id='nomor_telepon'
                                                class='form-control @error('nomor_telepon') is-invalid @enderror'
                                                value='{{ $item->nomor_telepon ?? old('nomor_telepon') }}'>
                                            @error('nomor_telepon')
                                                <div class='invalid-feedback'>
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class='form-group mb-3'>
                                            <label for='nomor_wa' class='mb-2'>Nomor Wa <span
                                                    class='text-danger small'>*</span></label>
                                            <input type='text' name='nomor_wa' id='nomor_wa'
                                                class='form-control @error('nomor_wa') is-invalid @enderror'
                                                value='{{ $item->nomor_wa ?? old('nomor_wa') }}'>
                                            @error('nomor_wa')
                                                <div class='invalid-feedback'>
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class='form-group mb-3'>
                                            <label for='alamat' class='mb-2'>Alamat</label>
                                            <textarea name='alamat' id='alamat' cols='30' rows='3'
                                                class='form-control @error('alamat') is-invalid @enderror'>{{ $item->alamat ?? old('alamat') }}</textarea>
                                            @error('alamat')
                                                <div class='invalid-feedback'>
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class='form-group mb-3'>
                                            <label for='link_facebook' class='mb-2'>Link Facebook <span
                                                    class='text-danger small'>*</span></label>
                                            <input type='text' name='link_facebook' id='link_facebook'
                                                class='form-control @error('link_facebook') is-invalid @enderror'
                                                value='{{ $item->link_facebook ?? old('link_facebook') }}'>
                                            @error('link_facebook')
                                                <div class='invalid-feedback'>
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class='form-group mb-3'>
                                            <label for='link_instagram' class='mb-2'>Link Instagram <span
                                                    class='text-danger small'>*</span></label>
                                            <input type='text' name='link_instagram' id='link_instagram'
                                                class='form-control @error('link_instagram') is-invalid @enderror'
                                                value='{{ $item->link_instagram ?? old('link_instagram') }}'>
                                            @error('link_instagram')
                                                <div class='invalid-feedback'>
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class='form-group mb-3'>
                                            <label for='link_tiktok' class='mb-2'>Link Tiktok <span
                                                    class='text-danger small'>*</span></label>
                                            <input type='text' name='link_tiktok' id='link_tiktok'
                                                class='form-control @error('link_tiktok') is-invalid @enderror'
                                                value='{{ $item->link_tiktok ?? old('link_tiktok') }}'>
                                            @error('link_tiktok')
                                                <div class='invalid-feedback'>
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class='form-group mb-3'>
                                            <label for='author' class='mb-2'>Author <span
                                                    class='text-danger small'>*</span></label>
                                            <input type='text' name='author' id='author'
                                                class='form-control @error('author') is-invalid @enderror'
                                                value='{{ $item->author ?? old('author') }}'>
                                            @error('author')
                                                <div class='invalid-feedback'>
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class='form-group mb-3 row'>
                                            <div class="col-md-4">
                                                <label for='logo' class='mb-2'>Logo</label>
                                                <br>
                                                @if ($item)
                                                    <img src="{{ $item->logo() }}" class="img-fluid" alt="">
                                                @else
                                                    <span class="small"> Tidak Ada</span>
                                                @endif
                                            </div>
                                            <div class="col-md align-self-center">
                                                <input type='file' name='logo' id='logo'
                                                    class='form-control @error('logo') is-invalid @enderror'
                                                    value='{{ $item->nama_web ?? old('logo') }}'>
                                                @error('logo')
                                                    <div class='invalid-feedback'>
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md">
                                        <div class='form-group mb-3'>
                                            <label for='deskripsi' class='mb-2'>Deskripsi</label>
                                            <textarea name='deskripsi' id='deskripsi' cols='30' rows='3'
                                                class='form-control @error('deskripsi') is-invalid @enderror'>{{ $item->deskripsi ?? old('deskripsi') }}</textarea>
                                            @error('deskripsi')
                                                <div class='invalid-feedback'>
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class='form-group float-right'>
                                    <button class='btn btn-primary'>Update</button>
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
