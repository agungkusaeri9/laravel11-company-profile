@extends('frontend.layouts.app')

@section('content')
    <div class="container-xxl bg-dark page-header">
        <div class="container text-center">
            <h1 class="text-white animated zoomIn mb-3 ">Tentang Kami</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Tentang</li>
                </ol>
            </nav>
        </div>
    </div>
    </div>
    <!-- Navbar & Hero End -->
    <div class="container-xxl py-6" id="page_about">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                    <img class="img-fluid" src="{{ $pengaturan->logo() }}" style="max-height:300px">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-inline-block border rounded-pill text-blue-custom px-4 mb-3">Tentang Kami</div>
                    <h2 class="mb-4 text-blue-custom">UD. Mitra Jaya Koveksi</h2>
                    <p class="mb-4">
                        UD. Mitra Jaya Konveksi, berdiri sejak tahun 2002, adalah usaha yang
                        bergerak di bidang produksi topi, dasi, dan bordir komputer berkualitas tinggi. Kami
                        melayani pembuatan produk dengan desain custom untuk kebutuhan pribadi, instansi,
                        atau perusahaan. Dengan didukung oleh tenaga profesional dan teknologi modern,
                        kami berkomitmen memberikan hasil terbaik yang presisi, tahan lama, dan sesuai
                        dengan kebutuhan anda.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
