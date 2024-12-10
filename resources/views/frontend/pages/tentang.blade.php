@extends('frontend.layouts.app')

@section('content')
    <div class="container-xxl bg-dark page-header">
        <div class="container text-center">
            <h1 class="text-white animated zoomIn mb-3">Tentang Kami</h1>
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
    <!-- About Start -->
    <div class="container-xxl">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-12 wow zoomIn" data-wow-delay="0.1s">
                    <div class="text-center">
                        <img class="img-fluid" src="{{ $pengaturan->logo() }}" style="max-height:340px">
                    </div>
                </div>
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="text-center">
                        <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Tentang Kami</div>
                    </div>
                    <p>
                        {!! $pengaturan->deskripsi !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection
