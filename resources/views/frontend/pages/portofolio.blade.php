@extends('frontend.layouts.app')

@section('content')
    <div class="container-xxl bg-dark page-header">
        <div class="container text-center">
            <h1 class="text-white animated zoomIn mb-3">Portofolio</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Portofolio</li>
                </ol>
            </nav>
        </div>
    </div>
    </div>

    <div class="container-xxl py-6" id="page_portofolio">
        <div class="container">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Portofolio Kami</div>
                <h2 class="mb-5">Menampilkan Proyek dan Keahlian Konveksi Kami</h2>
            </div>
            <div class="row g-4">
                @foreach ($data_portofolio as $portofolio)
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s" style="background-color:#072a4f !important">
                        <a href="{{ route('page.detail-portofolio', $portofolio->id) }}">
                            <div class="service-item rounded h-100">
                                <div class="p-4">
                                    <img src="{{ $portofolio->gambar() }}" class="img-fluid mb-3" alt="">
                                    <h5 class="mb-3 text-white">{{ $portofolio->judul }}</h5>
                                    <span class="text-white">{{ $portofolio->deskripsi_singkat }}</span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
