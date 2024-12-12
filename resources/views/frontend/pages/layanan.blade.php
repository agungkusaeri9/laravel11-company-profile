@extends('frontend.layouts.app')

@section('content')
    <div class="container-xxl bg-dark page-header">
        <div class="container text-center">
            <h1 class="text-white animated zoomIn mb-3">Testimoni</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Testimoni</li>
                </ol>
            </nav>
        </div>
    </div>
    </div>
    <!-- Navbar & Hero End -->
    <!-- Service Start -->
    <div class="container-xxl py-6" id="page_service">
        <div class="container">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">layanan Kami</div>
                <h2 class="mb-5">Solusi Terbaik untuk Kebutuhan Konveksi Anda</h2>
            </div>
            <div class="row g-4">
                @foreach ($data_layanan as $layanan)
                    <a href="{{ route('page.detail-layanan', $layanan->slug) }}">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="rounded h-100">
                                <div class="p-4">
                                    <div style="position: relative">
                                        <img src="{{ $layanan->gambar() }}" class="img-fluid"
                                            style="filter: brightness(0.5);height:250px;object-fit:cover" alt="">
                                        <div style="position: absolute;bottom:10px;left:10px;right:10px">
                                            <h5 class="mb-3 text-white" style="filter: brightness(0.9)">{{ $layanan->nama }}
                                            </h5>
                                            <span class="text-white"
                                                style="filter: brightness(0.9)">{{ \Str::limit($layanan->deskripsi_singkat, 100) }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection
