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
    <div class="container-xxl">
        <div class="container">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Our Services</div>
                <h2 class="mb-5">We Provide Solutions On Your Business</h2>
            </div>
            <div class="row g-4">
                @foreach ($data_layanan as $item)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-user-tie fa-2x"></i>
                                </div>
                                <a class="service-btn" href="{{ route('page.detail-layanan', $item->slug) }}">
                                    <i class="fa fa-link fa-2x"></i>
                                </a>
                            </div>
                            <div class="p-4">
                                <h5 class="mb-3">{{ $item->nama }}</h5>
                                <span>{{ $item->deskripsi_singkat }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection
